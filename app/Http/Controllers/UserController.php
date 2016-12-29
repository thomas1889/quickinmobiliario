<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use QuickInmobiliario\Http\Controllers\Controller;
use QuickInmobiliario\User;
use Illuminate\Support\Facades\Storage;

//use QuickInmobiliario\User;


class UserController extends Controller {

    public function edit($nameUser) {

        $user = Auth::User();
        return view('auth/user', ['user', $user])->with('user', $user);
    }

    public function update(Request $data) {
        dd();

        $file = $data->file('image');
        $rnd = str_random(10);
        $nombre = $rnd . '-' . $file->getClientOriginalName();
        $path = public_path('uploads/' . $nombre);
        $url = '/uploads/' . $nombre;


//        $id = Auth::User()->id;
//        $user_update = User::findOrFail($id);
//        $user_update->username = $data->get('username');
//        $user_update->first_name = $data->get('first_name');
//        $user_update->last_name = $data->get('last_name');
//        $user_update->business_name = $data->get('business_name');
//        $user_update->document_type = $data->get('document_type');
//        $user_update->document = $data->get('document');
//        $user_update->email = $data->get('email');
//        $user_update->cell_phone = $data->get('cell_phone');
//        $user_update->address = $data->get('address');
//        $user_update->age = $data->get('age');
//        $user_update->gender = $data->get('gender');
//        $user_update->profession = $data->get('profession');
//        $user_update->city = $data->get('city');
//        $user_update->image_perfil =$url; 
//        $user_update->save();
//        return view('home');
        return'<img src="' . $url . '"/>';
    }

}
