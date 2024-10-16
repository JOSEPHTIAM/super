<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnoncesController extends Controller
{
    public function index()
    {
        return view('admin.annonces');
    }
    public function new()
    {
        return view('admin.new');
    }
}
