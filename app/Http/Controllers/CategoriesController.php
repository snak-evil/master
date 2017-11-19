<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sidebar;
use App\Categories;

class CategoriesController extends Controller
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
    	$sidebarall=Sidebar::all()->where('enable',1);
    	$categories=Categories::all();
    	return view('admin.categories.index',compact('sidebarall','categories'));
    }
    public function create()
    {

    	$parentCate=Categories::all()->where('parent',0);

    	return view('admin.categories.create',compact('parentCate'));

    }
    public function store()
    {

    	$this->validate(request(),[
    		'name'=>'required',
    	]);
    	Categories::create([
    		'name'=>request('name'),
    		'active'=>1,
    		'parent'=>request('parent'),
    		'created_at'=>date('Y-m-d H:i:s'),
   			'updated_at'=>date('Y-m-d H:i:s')
    	]);

    	return redirect('/admin/categories');
    }
    public function edit($id){
    	$category=Categories::find($id);
    	return $category;
    }
    public function update(){

    }
    public function destroy(){

    }
}
