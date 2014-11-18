<?php namespace Artronics\Validation;


class UserValidator extends Validator
{
    public static $rules = [
        //TODO add table and row specific rule
        //like 'required|email|unique:Users,email'
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'name' => 'required',
        // 'title' => 'required'
    ];
}
