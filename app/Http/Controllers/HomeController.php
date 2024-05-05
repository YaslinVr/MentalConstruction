<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizz;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    	$user_id = auth()->user()->id;
    	$result = Quizz::where('user_id', $user_id)->latest()->get();        
    return view('dashboard', compact('result'));
    	
    }
}
