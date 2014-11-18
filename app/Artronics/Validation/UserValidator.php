<?php namespace Artronics\Validation;

//use Artronics\Validation\Validator;

class UserValidator extends Validator
{
    public static $rules = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'name' => 'required',
        // 'title' => 'required'
    ];

    /**
     * @param $data
     * @return bool
     * @throws ValidationException
     */
    public function checkInput($data)
    {
        $validation = $this->validator->make($data, static::$rules);
        if($validation->fails()) throw new ValidationException($validation->messages());

        return true;
    }
}
