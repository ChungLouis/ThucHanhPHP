<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class UserController extends Controller
{
    public function home(){
        return view('user.home');
    }
    public function match(){
        $data = Schedule::orderBy('id', 'asc')->search()->paginate(15);
        return view('user.match', compact('data'));
        
    }
    public function player(){
        return view('user.player');
    }
    public function contact(){
        return view('user.contact');
    }
}
