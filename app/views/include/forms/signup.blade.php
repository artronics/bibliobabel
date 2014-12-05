{{ Form::open(array('route' => 'users.store','role' => 'form','class' => 'form')) }}
    <div class="large-12 columns">
        {{--{{ Form::label('name','Your Name: ')}}--}}
        {{ Form::input('text', 'name',null, array('placeholder' => 'Your Name',
                                                  ),'Your Name:')}}
        {{Form::showError($errors, 'name', 'registration')}}
    </div>

    <div class="large-12 columns">
        {{ Form::input('email', 'email',null, array('placeholder' => 'Your Email',
                                                  ),'Your Email:')}}
        {{Form::showError($errors, 'email', 'registration')}}
    </div>
    <div class="large-12 columns">
        {{ Form::input('password', 'password',null, array('placeholder' => 'Your Password',
                                                  ),'Your Password:')}}
        {{Form::showError($errors, 'password', 'registration')}}
    </div>

    <div class="large-12 columns">
        {{ Form::input('password', 'password_confirmation',null, array('placeholder' => 'Confirm Your Password',
                                                  ),'Confirm Password:')}}
        {{Form::showError($errors, 'password_confirmation', 'registration')}}
    </div>

    <div class="large-12 columns">
        {{ Form::submit('Sign Up', array('class'       => 'button radius'))}}
    </div>


{{ Form::close() }}
