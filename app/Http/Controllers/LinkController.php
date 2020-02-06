<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * this fuction showing the front home page
     */
    public function welcome()
    {
        return view('welcome');
    }
    /**
     * this function showing the people page
     */
    public function people()
    {
        return view('people');
    }
    /**
     * this function showing the people profile page
     */
    public function profile()
    {
        return view('profile');
    }
    /**
     * this function showing the project page
     */
    public function project()
    {
        return view('project');
    }
    /**
     * this function showing the about page
     */
    public function about()
    {
        return view('about');
    }
    /**
     * this function showing the about page
     */
    public function contact()
    {
        return view('contact');
    }
}
