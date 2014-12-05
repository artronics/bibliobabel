<?php
use League\FactoryMuffin\Facade as Muffin;

Muffin::define('Artronics\Models\User\User', array(
    'name' => 'firstName',
    'email' => 'email|unique',
    'username' => 'username',
    'password' => 'password',
    'remember_token' => 'password',
));

Muffin::define('Artronics\Models\Profile\Profile',array(
    'about' => 'jalal',
    'user_id' => 'factory|Artronics\Models\User\User',
));
