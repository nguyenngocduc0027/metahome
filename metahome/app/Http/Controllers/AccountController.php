<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // show list account
    public function show()
    {
        $account = User::all();
        return view('admin.pages.account.show', compact('account'));
    }

    // add account admin
    public function add(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->cccd = $request->cccd;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect('/account');
    }

    // detail account
    public function detail($userId)
    {
        $user = User::find($userId);
        return view('admin.pages.account.detail', compact('user'));
    }

    // edit account
    public function edit()
    {
        $id_ava = 1;
        $avatar = Avatar::find($id_ava);
        return view('admin.pages.account.edit', compact('avatar'));
    }

    // permission account
    public function permission()
    {
        return view('admin.pages.account.permission');
    }
}
