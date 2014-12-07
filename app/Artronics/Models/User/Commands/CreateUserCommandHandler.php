<?php namespace Artronics\Models\User\Commands;


use Artronics\Models\User\Repository\UserRepositoryInterface;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
class CreateUserCommandHandler implements CommandHandler
{
    use DispatchableTrait;

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
        $user = $this->userRepo->create($data);
        $this->dispatchEventsFor($user);

        return $user;
    }
}
