<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title="Dashboard";
        return view('admin.index');

    }

    public function activity()
    {
        $title ="Activity";
        return view('admin.activity')->with('title',$title);
    }

    public function setting()
    {
        $title ="Setting";
        return view('admin.setting')->with('title', $title);
    }



}
