<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function contact()
    {
        return view("contact");
    }
    public function about()
    {
        return view("about");
    }
    public function winner()
    {
        return view("winner");
    }
    public function top()
    {
        return view("top");
    }
}
