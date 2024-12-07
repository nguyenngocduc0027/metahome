<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

        $imageFullPath = $folderPath . $imageName;

        file_put_contents($imageFullPath, $image_base64);


        $saveFile = new Avatar;
        $saveFile->title = $imageName;
        $saveFile->save();

        $user = User::find($request->userId);
        if ($user->avatar == 'avatar.png') {
            $user->avatar = $imageName;
            $user->save();
        } else {
            $image_path = public_path().'/images/avatar/' . $user->avatar;  // Value is not URL but directory file path
            File::delete($image_path);
            $user->avatar = $imageName;
            $user->save();
        }


        return response()->json(['success' => 'Crop Image Saved/Uploaded Successfully']);
    }
}
