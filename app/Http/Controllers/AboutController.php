<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.about.index');
    }
}
