<?php namespace Artronics\Forms;


//use Artronics\Validation\FormValidator;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator
{
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'name' => 'required',
        // 'title' => 'required'
    ];
}
