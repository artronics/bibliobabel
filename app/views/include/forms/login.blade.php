{{ Form::open(array('route' => 'sessions.store','role' => 'form')) }}
    <div class="row">
        <div class="large-12 columns">

            {{ Form::input('email', 'email',null, array('placeholder' => 'Email'  ),'Email:')}}

            {{ Form::input('password', 'password', null, array('placeholder' => 'Password'),'Password:')}}

            {{ Form::submit('Sign in', array('class' => 'button radius tiny'))}}
        </div>
    </div>
{{ Form::close() }}
