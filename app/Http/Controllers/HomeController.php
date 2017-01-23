<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index(){
		return view('home');
	}

	/**
	* Show the contact page
	* @return \Illuminate\Http\Response
	*/
	public function contact(){
		return view('contact');
	}
	
	public function faqs(){
		return view('faqs');
	}

	public function pricing(){
		return view('pricing');
	}
}
