{{ Form::open(array('route' => 'users.store','role' => 'form','class' => 'form')) }}
    <div class="form-group">
        {{ Form::label('firstname','First Name: ')}}
        {{ Form::text('firstname',null, array('class'       => 'form-control',
                                            'id'          => 'firstname',
                                            'placeholder' => 'First Name'  ))}}
    </div>
    <div class="form-group">
        {{ Form::label('lastname','Last Name: ')}}
        {{ Form::text('lastname',null, array('class'       => 'form-control',
                                            'id'          => 'lastname',
                                            'placeholder' => 'Last Name'  ))}}
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
        {{ Form::submit('Signup', array('class'       => 'btn btn-primary btn-lg btn-block',
                                        'id'          => 'btn-signup'  ))}}
    </div>

{{ Form::close() }}
