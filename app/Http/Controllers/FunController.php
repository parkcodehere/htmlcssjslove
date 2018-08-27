<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunController extends Controller
{
  function index($slug = 'index') {
    return view("fun.$slug");
  }
}
