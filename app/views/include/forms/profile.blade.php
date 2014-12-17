{{ Form::model($profile, array('route' => 'profiles.store','role' => 'form','class' => 'form')) }}
    <div class="large-12 columns">
        {{ Form::file('profile_pic')}}
        {{ Form::input('text', 'name',null, array('placeholder' => 'Name:'),'Name:')}}
        {{ Form::input('text', 'username',null, array('placeholder' => 'Username:'), 'Username:')}}
        {{ Form::input('text', 'facebook_username',null, array('placeholder' => 'Facebook Account:'), 'Facebook Account:')}}
        {{ Form::input('text', 'twitter_username',null, array('placeholder' => 'Twitter Account:'), 'Twitter Account:')}}
        {{ Form::input('text', 'location',null, array('placeholder' => 'Location:'), 'Location:')}}
        {{ Form::textarea('about',null, array('placeholder' => 'About:', 'rows' => '10'), 'About:')}}

        {{Form::label('privacy','Privacy:')}}
        {{Form::select('privacy', array(
            'public' => 'public',
            'protected' => 'protected',
            'private' => 'private'), 'protected');}}
        {{ Form::submit('Save', array('class' => 'button radius'))}}
{{ Form::close() }}
