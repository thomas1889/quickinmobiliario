<?php

namespace QuickInmobiliario\Http\Controllers\Auth;

use QuickInmobiliario\User;
use QuickInmobiliario\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'first_name' => 'max:255',
            'business_name' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|max:255|min:3|unique:users',
            'document' => 'required|max:255|min:3|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
            'first_name' => $data['first_name'],
            'business_name' => $data['business_name'],
            'document_type' => $data['document_type'],
            'document' => $data['document'],
            'username' => $data['username'],
            'email' => $data['email'],
            'image_perfil' => $data['image_perfil'],
            'password' => bcrypt($data['password']),
            'user_type_id' => $data['select'],
        ]);
    }

}
