<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function create()
    {
        return view('test.create');
    }

    public function store(Request $request)
    {
        return back()->withInput();
    }
}
