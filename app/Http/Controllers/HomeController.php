<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
   

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->user()->authorizeRole('user') == true)
        {
            return view('home');
        }else
     
       if($request->user()->authorizeRole('admin'))
        {
            return view('admin.admin');
        }
       
       
        
    }

    public function nosotros()
    {
        return view('nosotros');
    }

}
