<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::all();

        return view('home', [
        	'users' => $users,
    	]);
    }

    public function mv()
    {
        return view('manageVol');
    }

    public function mo()
    {
        return view('manageOpp');
    }
}