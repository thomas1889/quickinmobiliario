<?php

namespace QuickInmobiliario\Http\Controllers\Auth;

use QuickInmobiliario\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class ForgotPasswordController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Password Reset Controller
      |--------------------------------------------------------------------------
      |
      | This controller is responsible for handling password reset emails and
      | includes a trait which assists in sending these notifications from
      | your application to your users. Feel free to explore this trait.
      |
     */

use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    public function SendResetLinkEmail(Request $request) {

        $user_mail = $request->get('email');
        Mail::send('auth.login', $request->all(), function ($message) {
            $message->subject('Correo');
            $message->to('stievnars@gmail.com');
        });
        dd($user_mail);
    }

}
