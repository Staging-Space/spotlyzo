<?php

namespace App\Http\Controllers;

use App\Models\Place;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('app.index', [
            'places' => Place::latest()->get(),
        ]);
    }
}
