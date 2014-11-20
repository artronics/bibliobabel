<?php
use Artronics\Forms\RegistrationForm;
use Artronics\Repositories\UserRepository\UserRepositoryInterface as UserRepo;
use Artronics\User\User;

class UsersController extends \BaseController
{
    protected $validator;
    protected $userRepo;
    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    function __construct(RegistrationForm $registrationForm, UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
        $this->registrationForm = $registrationForm;
    }

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        /*
         * Here we check if user porovided correct
         * inputs. If not we redirect her back.
         * we also provide some messages so, according view would
         * show appropriate messages to user
         */
        //TODO: find a way to show the user appropiate messages
        //catch exception is located in global.php
        //Now in case of validation exception we redirect user to home page
        //without any messages
        $this->registrationForm->validate($data);

        $user = $this->userRepo->createUser($data);

        \Event::fire('user.creating',[$data]);

        Auth::login($user);
        return Redirect::route('home');
    }

    /**
     * Display the specified user.
     *
     * @param  int      $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int      $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return View::make('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($data = Input::all(), User::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user->update($data);

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return Redirect::route('users.index');
    }

}
