<?php namespace Artronics\Models\User\Commands;


//use Artronics\Forms\RegistrationForm;


use Artronics\Forms\RegistrationForm;
use Artronics\Forms\RegistrationFormException;
use Laracasts\Validation\FormValidationException;

class CreateUserValidator
{
    protected $validator;

    function __construct(RegistrationForm $validator)
    {
        $this->validator = $validator;
    }


    public function validate($command)
    {
        $formData = get_object_vars($command);
//        dd($formData);
        try {
            $this->validator->validate($formData);
        } catch (FormValidationException $e) {
            throw new RegistrationFormException($e->getErrors(), null, $e);
        }
//        $this->validator->validate($formData);
    }
}
