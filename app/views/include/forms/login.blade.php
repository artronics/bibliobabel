{{ Form::open(array('route' => 'sessions.store','role' => 'form','class' => 'form')) }}

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
        {{ Form::submit('Login', array('class'       => 'btn btn-primary btn-lg btn-block',
                                        'id'          => 'btn-signup'  ))}}
    </div>

{{ Form::close() }}