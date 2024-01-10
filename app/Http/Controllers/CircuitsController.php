<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircuitsController extends Controller
{
    public function index()
    {
        return view('circuits');
    }
    public function add()
    {
        return view('addCircuit');
    }
    public function edit()
    {
        return view('EditCircuit');
    }
    public function delete()
    {
        return view('EditCircuit');
    }
}
