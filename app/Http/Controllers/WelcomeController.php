<?php

namespace Larample\Http\Controllers;

use Illuminate\Http\Request;

use Larample\Http\Requests;
use Larample\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index ()
    {
        return view('welcome');
    }
}