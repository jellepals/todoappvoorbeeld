<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome',['tests' => Test::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Test::create([
            'name' => $request->name
        ]);
        return redirect()->route('root');
    }
}
