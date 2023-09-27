<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
<<<<<<< HEAD
            'username' => ['required', 'string', 'max:255', 'unique:users'],
=======
>>>>>>> 834dc2bca9f1ac8a6564f5c4f99bedd1f2cfb4ea
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
        'name' => $data['name'], // フルネームを格納
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
=======
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
>>>>>>> 834dc2bca9f1ac8a6564f5c4f99bedd1f2cfb4ea
        ]);
    }


    // ...

    /**
     * 登録フォームを表示します。
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }
}

