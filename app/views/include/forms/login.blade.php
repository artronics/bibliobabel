{{ Form::open(array('route' => 'sessions.store','role' => 'form')) }}
    <div class="row">
        <div class="large-12 columns">
            {{--<div>--}}
                <label>Email:
                    {{ Form::text('email',null, array('placeholder' => 'Email'  ))}}
                </label>
            {{--</div>--}}
            <label>Password:
                {{ Form::password('password', array('placeholder' => 'Password'))}}
            </label>

            <div data-alert class="alert-box alert radius">
              {{$errors->first('credential')}}
              <a href="#" class="close">&times;</a>
            </div>

                {{ Form::submit('Sign in', array('class'       => 'button radius tiny'))}}
        </div>
    </div>
{{ Form::close() }}
