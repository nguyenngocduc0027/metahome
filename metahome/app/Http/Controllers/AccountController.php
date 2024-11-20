<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // show list account
    public function show(){
        return view('admin.pages.account.show');
    }

    // detail account
    public function detail(){
        return view('admin.pages.account.detail');
    }

    // edit account
    public function edit(){
        $id_ava = 1;
        $avatar = Avatar::find($id_ava);
        return view('admin.pages.account.edit', compact('avatar'));
    }
}
