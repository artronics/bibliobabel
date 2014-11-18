<?php namespace Artronics\Validation;

//use Artronics\Validation\Validator;

class UserValidator extends Validator
{
    public static $rules = [
        //TODO add table and row specific rules
        //like 'required|email|unique:Users,email'
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'name' => 'required',
        // 'title' => 'required'
    ];
}
