<?php

namespace App\Http\Controllers;

use App\Models\Place;

class PlaceController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        return view('app.places.show', [
            'place' => $place,
        ]);
    }

    /**
     * Display search page.
     */
    public function search()
    {
        return view('app.places.search');
    }

    /**
     * Book a place.
     */
    public function book($id)
    {
        return view('app.places.book', [
            'place' => Place::findOrFail($id),
        ]);
    }
}
