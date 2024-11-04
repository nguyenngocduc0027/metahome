<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // show list account
    public function show(){
        return view('admin.pages.account.show');
    }
}
