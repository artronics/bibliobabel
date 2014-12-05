<?php namespace Artronics\Models\User\Commands;


class CreateUserCommand
{

    //For converting command object to array
    //these properties must be public. Do not chane them.
    public  $name;
    public $email;
    public  $password;
    public  $password_confirmation;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    function __construct($email, $name, $password, $password_confirmation)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
    }


}
