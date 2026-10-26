<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// landing home web
class HomeController extends Controller
{
public function index()
{
    return view('landing.home');
}
}