<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\User;
use QuickInmobiliario\Punctuation;
use Illuminate\Support\Facades\Auth;

class PunctuationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $puntuactions = Punctuation::where(['user_id' => $id])->get();
        $user = User::findOrFail($id);
        return view('punctuations.index', ['punctuations' => $puntuactions, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('punctuations.create', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user = User::findOrFail($request->get('user'));
        $punctuation = new Punctuation(['punctuation' => $request->get('punctuation'), 'comment' => $request->get('comment')]);
        $user->punctuations()->save($punctuation);

        return redirect()->route('user_punctuations_path', $user->id);
    }


    private function nameUsers($array) {

        foreach ($array as $nameUser) {
            $contador=1;
            $users = User::select('username')->where('id', $nameUser->user_coment)->get();
            $names = [$users];
            $names= array_add($names, $contador, $users);
            $contador=$contador+1;
        }
        dd($names);
    }

}
