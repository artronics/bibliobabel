<?php namespace Artronics\Models\User\Commands;


use Artronics\Repositories\UserRepository\UserRepositoryInterface;
use Laracasts\Commander\CommandHandler;

class CreateUserCommandHandler implements CommandHandler
{

    private $userRepo;

    function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $data = get_object_vars($command);
        $user = $this->userRepo->add($data);

        return $user;
    }
}
