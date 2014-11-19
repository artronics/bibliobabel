<?php namespace Artronics\Validation;

use Illuminate\Validation\Factory as LaravelValidator;

class Validator implements FactoryInterface {

	/**
	 * @var \Illuminate\Validation\Factory
	 */
	private $validator;

	/**
	 * @param LaravelValidator $validator
	 */
	function __construct(LaravelValidator $validator)
	{
		$this->validator = $validator;
	}

	/**
	 * Initialize validation
	 *
	 * @param array $formData
	 * @param array $rules
	 * @param array $messages
	 * @return \Illuminate\Validation\Validator
	 */
	public function make(array $formData, array $rules, array $messages = [])
	{
		return $this->validator->make($formData, $rules, $messages);
	}

}
