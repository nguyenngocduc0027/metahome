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
        return view('admin.pages.account.show');
    }

    // add account admin
    public function add(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->name,
            'cccd' => $request->name,
            'dob' => $request->name,
            'gender' => $request->name,
            'role' => $request->name,
            'address' => $request->name,
            'password' => Hash::make($request->password),
        ]);
    }

    // detail account
    public function detail()
    {
        return view('admin.pages.account.detail');
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
