<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewContact()
    {
        return view('contact');
    }
}
