<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sidebar;

class SidebarController extends Controller
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
   public function index()
   {
   	return 'Side Menu';
   }

   public function create()
   {
   	$sidebars=Sidebar::all()->where('parent',0);
   	$sidebarall=Sidebar::all();
   	return view('sidebar.create',compact('sidebars','sidebarall'));
   }

   public function store()
   {
   	Sidebar::create([
   		'title'=>request('title'),
   		'alias'=>request('alias'),
   		'url'=>request('url'),
   		'icon'=>request('icon'),
   		'parent'=>request('parent'),
   		'created_at'=>date('Y-m-d H:i:s'),
   		'updated_at'=>date('Y-m-d H:i:s')
   	]);
   }
}
