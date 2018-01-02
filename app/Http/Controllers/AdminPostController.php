<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckAdmin;
use Auth;
use App\Classfi;
use DB;
class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAdmin::class);
        
    }
    public function index()
    {
        $admin = Auth::user()->admin;
        if($admin == FALSE)
        {
            return redirect('/');   
        }
        else
        return view('admin.index');
    }

    
}

