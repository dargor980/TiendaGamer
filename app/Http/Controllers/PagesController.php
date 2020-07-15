<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewContact()
    {
        return view('contact');
    }
    public function viewVideojuegos()
    {
        return view('videojuegos');
    }
    public function viewGeek()
    {
        return view('geek');
    }
    public function viewComputacion()
    {
        return view('computacion');
    }
}
