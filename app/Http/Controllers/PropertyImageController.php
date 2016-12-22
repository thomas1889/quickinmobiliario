<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PropertyImageController extends Controller
{

  protected $fillable = ['file'];

  public function upload(Request $request){
    //dd($request->file('file'));

    $validator = Validator::make($request->file(), [
      'file' => 'image'
    ]);

    if($validator->fails()){
      return response()->json('error', 400);
    }

    $file = $request->file('file');
    $extension = File::extension($request->file('originalName'));
    $filename = sha1(time()).".{$extension}";

    $algo = Storage::disk('local')->put('public'.$request->file('name'), $file);

    return response()->json([
      'extension' => File::extension($algo),
      'path' => $algo
    ]);
  }
}
