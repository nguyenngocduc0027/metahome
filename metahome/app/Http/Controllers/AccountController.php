<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    // show list account
    public function show()
    {
        $account = User::all();
        return view('admin.pages.account.show', compact('account'));
    }

    public function create()
    {
        return view('admin.pages.account.create');
    }

    // add account admin
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:users|min:10||max:10',
            'email' => 'required|unique:users|email:rfc,dns',
            'cccd' => 'required|unique:users|max:12',
            'dob' => 'required',
            'password' => 'required|min:8',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } else {
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
            $user->avatar = 'avatar.png';
            $user->save();

            return redirect('/account');
        }
    }

    // detail account
    public function detail($userId)
    {
        $user = User::find($userId);
        return view('admin.pages.account.detail', compact('user'));
    }

    // edit account
    public function edit($userId)
    {
        $user = User::find($userId);
        return view('admin.pages.account.edit', compact(var_name: 'user'));
    }

    public function update(Request $request, $userId)
    {
        $check = User::find($userId);
        $check->name = $request->name;
        $check->phone = $request->phone;
        $check->cccd = $request->cccd;
        $check->dob = $request->dob;
        $check->gender = $request->gender;
        $check->role = $request->role;
        $check->address = $request->address;
        if ($check->password == $request->password) {
            $check->password = $request->password;
        } else {
            $check->password = Hash::make($request->password);
        }
        $check->save();

        return redirect('/account');
    }

    public function delete($userId) {
        $user = User::find($userId);
        $user->delete();
        return redirect('/account');
    }

    // permission account
    public function permission()
    {
        return view('admin.pages.account.permission');
    }
}
