<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
 { 
    public function new()
{ 
    return view('admin.new');
}
 }