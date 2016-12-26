<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use QuickInmobiliario\PropertyImage;

class PropertyImageController extends Controller
{

  protected $fillable = ['file'];

  /**
  * @param Request $request
  * @return Response json
  */
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
    $image_path = str_replace('public/', '', $path);

    return response()->json([
      'extension' => File::extension($path),
      'path' => $image_path
    ]);
  }

  /**
  * @param Request $request
  * @return Response json
  */
  public function delete(Request $request){
    $file = Storage::disk('local')->delete('public/'.$request->get('path'));
    if(File::exists($file)){
      return response()->json([
        'error' => 'No se pudo eliminar el archivo'
      ], 405);
    }

    return response()->json(['ok' => 1]);
  }

  /**
  * @param Id $id
  * @return Response $file;
  */
  public function getImage($id){
    $image = PropertyImage::findOrFail($id);
    $file = Storage::disk('local')->get('public/'.$image->path);

    return response($file, 200);
  }
}
