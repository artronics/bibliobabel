<?php namespace Artronics\Validation;

use Illuminate\Validation\Factory;

abstract class Validator
{
    protected  $validator;

    function __construct(Factory $validator)
    {
        $this->validator = $validator;
    }

}
