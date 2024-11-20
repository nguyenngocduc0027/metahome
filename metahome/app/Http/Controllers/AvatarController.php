<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    //
    public function store(Request $request)
    {
        $folderPath = public_path(path: 'images/avatar/'); //create folder upload public/upload

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath.$imageName;

        file_put_contents($imageFullPath, $image_base64);

         $saveFile = new Avatar;
         $saveFile->title = $imageName;
         $saveFile->save();

        return response()->json(['success'=>'Crop Image Saved/Uploaded Successfully']);
    }
}
