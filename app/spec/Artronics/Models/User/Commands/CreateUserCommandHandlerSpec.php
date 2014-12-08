<?php

namespace spec\Artronics\Models\User\Commands;

use Artronics\Models\User\Commands\CreateUserCommand;
use Illuminate\Foundation\Application;
use Laracasts\Commander\Events\EventDispatcher;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Artronics\Models\User\Repository\UserRepositoryInterface;
use App;
class CreateUserCommandHandlerSpec extends ObjectBehavior
{
    protected $command;
    function let(UserRepositoryInterface $userRepo)
    {
        $this->beConstructedWith($userRepo);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Artronics\Models\User\Commands\CreateUserCommandHandler');
    }

    /*function it_should_return_user_model(
        ExampleCommand $command,
        Application $application,
        EventDispatcher $eventDispatcher
    )
    {
//        $application::make($eventDispatcher)->willReturn('kjk');
        $application->make(ExampleValidator::class)->willReturn($validator);
        $this->dispatchEventsFor("")->willReturn("");
        $this->handle($command)->shouldReturn('Artronics\Models\User\User');

    }*/
}
