<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sidebar;
use AuthenticatesUsers;

class AdministratorController extends Controller
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
        return view('admin.index');
    }
    public function login()
    {
        return "login";
    }
    public function logout(Request $request)
	{
	    auth()->logout();
	    return redirect('/admin/dashboard');
	}
}
