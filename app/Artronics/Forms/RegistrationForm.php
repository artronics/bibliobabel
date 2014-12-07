<?php namespace Artronics\Forms;


use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator
{
    protected $rules = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'name' => 'required',
    ];
}
