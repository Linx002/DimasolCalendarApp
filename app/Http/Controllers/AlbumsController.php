<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function Index(){
        return view ('albums.albumsindex');
    }
    public function Create(){
        return view ('albums.createalbum');
    }
    public function Store(Request $request){
       $this->validate($request, [
           'albumName' => 'required',
           //archivos de menos de 2Mb
           'coverPhoto' => 'image|max:1999'
       ]);

       //tomar nombre del archivo con extension
       $fileNameWithExt = $request->file('coverPhoto')->getClientOriginalName();
       return $fileNameWithExt;

    //    //tomar solo el nombre del archivo
    //    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

    //    //tomar extension
    //    $extension = $request->file('coverPhoto')->getClientOriginalExtension();

    //    //Nombre del archivo con extension, nombre unico para la base de datos
    //    $finalFileName = $fileName.'_'.time().'.'.$extension;

    //    $path = $request->file('coverPhoto')->storeAs('public/album_covers',$finalFileName);

    //    return $path;
    }
}
