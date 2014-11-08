<?php

class ItemsController extends BaseController {
    /*
    |-------------------------------------------------
    | ItemsController Controller File
    |-------------------------------------------------
    */

    /**
     * Items Model
     * @var Item
     */
    protected $items;

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param Items $item
     * @param User $user
     */
    public function __construct(Items $item, User $user)
    {
        parent::__construct();
        $this->item = $item;
        $this->user = $user;
    }

    /**
     * Stores new item
     *
     */
    public function createItem()
    {
        $this->item->name = Input::get('name');
        $this->item->description = Input::get('description');
        $this->item->price = Input::get('price');
        $this->item->city = Input::get('city');
        $this->item->state = Input::get('state');
        $this->item->street = Input::get('street');
        // Save if valid.
        $this->item->save();

        if ( $this->item->id ){
            // Redirect with success message, You may replace "Lang::get(..." for your custom message.
            return Redirect::to('item/sucessfullyCreated')
                ->with( 'success', Lang::get('item/item.sucessfullyCreated') );
        }
    }

    /**
     * Edits a item
     * @param Items $item
     */
    public function editItem($item)
    {
        // Validate the inputs
        $validator = Validator::make(Input::all(), $item->getUpdateRules());


        if ($validator->passes())
        {
            $oldItem = clone $item;
            $item->name = Input::get('name');
            $item->description = Input::get('description');
            $item->price = Input::get('price');
            $item->city = Input::get('city');
            $item->state = Input::get('state');
            $item->street = Input::get('street');
            $item->prepareRules($oldItem, $item);

            // Save if valid. Password field will be hashed before save
            $item->amend();
        }

        // Get validation errors (see Ardent package)
        $error = $item->errors()->all();

        if(empty($error)) {
            return Redirect::to('item')
                ->with( 'success', Lang::get('item/item.item_updated') );
        }
    }

    /**
     * Displays the form for item creation
     *
     */
    public function getCreateItemForm()
    {
        return View::make('site/item/create');
    }

    /**
     * Returns all the items.
     *
     * @return View
     */
    public function getIndex()
    {
        // Get all the blog posts
        $items = $this->item->orderBy('created_at', 'DESC')->paginate(10);

        // Show the page
        return View::make('site/item/index', compact('items'));
    }

    /**
     * View a item.
     *
     * @param  string  $slug
     * @return View
     * @throws NotFoundHttpException
     */
    public function getView($slug)
    {
        // Get this blog post data
        $items = $this->item->where('slug', '=', $slug)->first();

        // Check if the blog post exists
        if (is_null($items))
        {
            // If we ended up in here, it means that
            // a page or a blog post didn't exist.
            // So, this means that it is time for
            // 404 error page.
            return App::abort(404);
        }

        // Get this post comments
        $comments = $items->comments()->orderBy('created_at', 'ASC')->get();

        // Get current user and check permission
        $user = $this->item->currentUser();
        $canComment = false;
        if(!empty($user)) {
            $canComment = $user->can('post_comment');
        }

        // Show the page
        return View::make('site/item/view_post', compact('post', 'comments', 'canComment'));
    }

    /**
     * View a item.
     *
     * @param  string  $slug
     * @return Redirect
     */
    public function postView($slug)
    {

        $user = $this->user->currentUser();
        $canComment = $user->can('post_comment');
        if ( ! $canComment)
        {
            return Redirect::to($slug . '#comments')->with('error', 'You need to be logged in to post comments!');
        }

        // Get this blog post data
        $post = $this->post->where('slug', '=', $slug)->first();

        // Declare the rules for the form validation
        $rules = array(
            'comment' => 'required|min:3'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Save the comment
            $comment = new Comment;
            $comment->user_id = Auth::user()->id;
            $comment->content = Input::get('comment');

            // Was the comment saved with success?
            if($post->comments()->save($comment))
            {
                // Redirect to this blog post page
                return Redirect::to($slug . '#comments')->with('success', 'Your comment was added with success.');
            }

            // Redirect to this blog post page
            return Redirect::to($slug . '#comments')->with('error', 'There was a problem adding your comment, please try again.');
        }

        // Redirect to this blog post page
        return Redirect::to($slug)->withInput()->withErrors($validator);
    }
} 