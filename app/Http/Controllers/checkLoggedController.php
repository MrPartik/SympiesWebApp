<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkLoggedController extends Controller
{
    //

    public function index()
    {

    }

    public function checkLogged()
    {
        if (null !== Auth::user()) {
            if (Auth::user()->role == 'admin') {
                return redirect('shop/dashboard');
            } else if (Auth::user()->role == 'member') {
                return redirect('member');

            } else {
                Auth::logout();
                return abort(500);
            }
        } else {
            return view('welcome');
        }
    }
}
