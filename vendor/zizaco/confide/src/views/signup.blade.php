<form method="POST" action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        <div class="form-group">
            <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
        </div>
        <div class="form-group">
            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
        </div>
        <div class="form-group">
            <label for="first_name">{{{ Lang::get('confide::confide.first_name') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.first_name') }}}" type="text" name="first_name" id="first_name" value="{{{ Input::old('first_name') }}}">
        </div>
        <div class="form-group">
            <label for="last_name">{{{ Lang::get('confide::confide.last_name') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.last_name') }}}" type="text" name="last_name" id="last_name" value="{{{ Input::old('last_name') }}}">
        </div>
        <div class="form-group">
            <label for="city">{{{ Lang::get('confide::confide.city') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.city') }}}" type="text" name="city" id="city" value="{{{ Input::old('city') }}}">
        </div>
        <div class="form-group">
            <label for="state">{{{ Lang::get('confide::confide.state') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.state') }}}" type="text" name="state" id="state" value="{{{ Input::old('state') }}}">
        </div>
        <div class="form-group">
            <label for="street">{{{ Lang::get('confide::confide.street') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.street') }}}" type="text" name="street" id="street" value="{{{ Input::old('street') }}}">
        </div>
        <div class="form-group">
            <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        @if ( Session::get('error') )
            <div class="alert alert-error alert-danger">
                @if ( is_array(Session::get('error')) )
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if ( Session::get('notice') )
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
</form>
