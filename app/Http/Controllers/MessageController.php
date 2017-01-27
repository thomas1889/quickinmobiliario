<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use QuickInmobiliario\User;
use QuickInmobiliario\Messages;

class MessageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $messages = Messages::where(['user_contacted_id' => $id])->orderBy('id', 'DESC')->get();
        $user = User::findOrFail($id);

        return view('messages.messages', ['messages' => $messages, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_contacted_id) {

        dd($user_contacted_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $username = User::where(['id' => $id])->username();
        dd($username);
        return $username;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_contacted_id) {
        $respons = Messages::where(['id' => $user_contacted_id])->get();


        return view('messages.answer', ['respons' => $respons, 'user' => Auth::User()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $responding) {
        $id = Auth::User()->id;
        $user_respond = User::findOrFail($id);
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
