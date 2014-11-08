<?php

use Illuminate\Support\Facades\URL;

class Items extends Eloquent {

    /**
     * Deletes a item and all
     * the associated comments.
     *
     * @return bool
     */
    public function delete()
    {
        // Delete the comments
        $this->comments()->delete();

        // Delete the item
        return parent::delete();
    }

    /**
     * Returns a formatted item content entry,
     * this ensures that line breaks are returned.
     *
     * @return string
     */
    public function content()
    {
        return nl2br($this->description);
    }

    /**
     * Get the item's author.
     *
     * @return User
     */
    public function author()
    {
        return $this->belongsTo('User', 'user_id');
    }

    /**
     * Get the item's meta_description.
     *
     * @return string
     */
    public function meta_description()
    {
        return $this->meta_description;
    }

    /**
     * Get the item's meta_keywords.
     *
     * @return string
     */
    public function meta_keywords()
    {
        return $this->meta_keywords;
    }

    /**
     * Get the item's comments.
     *
     * @return array
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }

    /**
     * Get the date the item was created.
     *
     * @param \Carbon|null $date
     * @return string
     */
    public function date($date=null)
    {
        if(is_null($date)) {
            $date = $this->created_at;
        }

        return String::date($date);
    }

    /**
     * Get the URL to the item.
     *
     * @return string
     */
    public function url()
    {
        return Url::to($this->slug);
    }

    /**
     * Returns the date of the item creation,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function created_at()
    {
        return $this->date($this->created_at);
    }

    /**
     * Returns the date of the item last update,
     * on a good and more readable format :)
     *
     * @return string
     */
    public function updated_at()
    {
        return $this->date($this->updated_at);
    }

}
