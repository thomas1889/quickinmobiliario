<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use QuickInmobiliario\Http\Controllers\Controller;
use QuickInmobiliario\User;

//use QuickInmobiliario\User;


class UserController extends Controller {

    public function edit($nameUser) {

        $user = Auth::User();
        return view('auth/user', ['user', $user])->with('user', $user);
    }

    public function update(Request $data) {
//        return User::update([
//            'first_name' => $data['first_name'],
//            'business_name' => $data['business_name'],
//            'document_type' => $data['document_type'],
//            'document' => $data['document'],
//            'username' => $data['username'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'user_type_id' => $data['select'],
//        ]);
//
//        $user->first_name = $request->get('first_name');
//
//        $user->save();

        dd($data->all());
    }

}
