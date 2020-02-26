<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {

        $user = Auth::user();
        $roles =$user->roles()->first();


        return view('user.home', ["user" => json_encode($user), "roles" => json_encode($roles)]);
    }

    
    public function adminHome()
    {
        return view('admin.home');
    }

}
