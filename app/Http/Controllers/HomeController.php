<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    
    {   $cats=Categorie::all();
        $this->middleware('auth');
        return view('home',compact('cats'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Categorie::all();
        
        return view('home',compact('cats'));
    }
}
