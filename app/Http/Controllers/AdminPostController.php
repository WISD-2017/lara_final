<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Classfi;
use DB;
class AdminPostController extends Controller
{
    public function index()
    {
        if(Auth::user()->admin == true)
        return view('admin.index');
        else
        return redirect()->route('index');
    }

    
}

