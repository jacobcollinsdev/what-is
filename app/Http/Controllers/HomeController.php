<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $keywords = Keyword::all();
        return view('home', compact('keywords'));
    }
}
