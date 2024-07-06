<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.index');
    }
}
