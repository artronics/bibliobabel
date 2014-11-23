<?php
use League\FactoryMuffin\Facade as Muffin;

Muffin::define(ART_USER, array(
    'name' => 'firstName',
    'email' => 'email',
    'username' => 'username',
    'password' => 'password',
    'remember_token' => 'password',
));

Muffin::define(ART_PROFILE,array(
    'about' => 'jalal',
    'user_id' => 'factory|'.ART_USER,
));