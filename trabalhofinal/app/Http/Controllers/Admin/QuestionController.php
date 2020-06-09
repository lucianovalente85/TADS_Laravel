<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class QuestionController extends Controller
{
    public function cretate()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        return back()->withInput();
    }
}
