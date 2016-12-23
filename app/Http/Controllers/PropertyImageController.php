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
    $validator = Validator::make($request->all(), [
      'file' => 'image'
    ]);

    if($validator->fails()){
      return response()->json(['error' => 'Tipo de archivo no permitido'], 400);
    }

    $file = $request->file('file');
    $extension = File::extension($request->file('originalName'));
    $filename = sha1(time()).".{$extension}";

    $path = Storage::disk('local')->put('public'.$request->file('name'), $file);

    return response()->json([
      'extension' => File::extension($path),
      'path' => $path
    ]);
  }
}
