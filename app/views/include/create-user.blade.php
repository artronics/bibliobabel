{{ Form::open(array('route' => 'users.store','role' => 'form','class' => 'form')) }}
    <div class="form-group">
        {{ Form::label('name','Your Name: ')}}
        {{ Form::text('name',null, array('class'       => 'form-control',
                                            'id'          => 'name',
                                            'placeholder' => 'Your Name'  ))}}
    </div>
    <div class="form-group">
        {{ Form::label('email','Email: ')}}
        {{ Form::text('email',null, array('class'       => 'form-control',
                                            'id'          => 'email',
                                            'placeholder' => 'Email'  ))}}
    </div>
    <div class="form-group">
        {{ Form::label('password','Password: ')}}
        {{ Form::password('password', array('class'       => 'form-control',
                                            'id'          => 'password',
                                             ))}}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation','Confirm Password: ')}}
        {{ Form::password('password_confirmation', array('class'       => 'form-control',
                                            'id'          => 'password-confirmation',
                                             ))}}
    </div>
    <div class="form-group">
        {{ Form::submit('Signup', array('class'       => 'btn btn-primary btn-lg btn-block',
                                        'id'          => 'btn-signup'  ))}}
    </div>

{{ Form::close() }}
