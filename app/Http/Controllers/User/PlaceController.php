<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PlaceStoreRequest;
use App\Http\Requests\User\PlaceUpdateRequest;
use App\Models\Category;
use App\Models\Facility;
use App\Models\Place;
use App\Models\PlaceImage;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.user.places.create', [
            'categories' => Category::latest()->get(),
            'facilities' => Facility::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaceStoreRequest $request)
    {
        $inputs = $request->validated();

        $openingHours = [
            'monday' => [
                'opening_time' => $inputs['monday_opening_time'],
                'closing_time' => $inputs['monday_closing_time'],
            ],
            'tuesday' => [
                'opening_time' => $inputs['tuesday_opening_time'],
                'closing_time' => $inputs['tuesday_closing_time'],
            ],
            'wednesday' => [
                'opening_time' => $inputs['wednesday_opening_time'],
                'closing_time' => $inputs['wednesday_closing_time'],
            ],
            'thursday' => [
                'opening_time' => $inputs['thursday_opening_time'],
                'closing_time' => $inputs['thursday_closing_time'],
            ],
            'friday' => [
                'opening_time' => $inputs['friday_opening_time'],
                'closing_time' => $inputs['friday_closing_time'],
            ],
            'saturday' => [
                'opening_time' => $inputs['saturday_opening_time'],
                'closing_time' => $inputs['saturday_closing_time'],
            ],
            'sunday' => [
                'opening_time' => $inputs['sunday_opening_time'],
                'closing_time' => $inputs['sunday_closing_time'],
            ],
        ];

        $place = Place::create([
            'user_id' => auth()->user()->id,
            'category_id' => $inputs['category'],
            'slug' => str($inputs['title'])->slug() . '-' . time(),
            'title' => $inputs['title'],
            'description' => $inputs['description'],
            'content' => $inputs['content'],
            'address' => $inputs['address'],
            'city' => $inputs['city'],
            'price' => $inputs['price'],
            'opening_hours' => json_encode($openingHours),
        ]);

        if (!empty($inputs['facilities'])) {
            $place->facilities()->attach($inputs['facilities']);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->hashName();
                Storage::putFileAs('place_images', $image, $imageName);
                PlaceImage::create([
                    'place_id' => $place->id,
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('user.places.create')->with([
            'success' => 'Place created successfully.',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        return view('app.user.places.edit', [
            'place' => $place,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlaceUpdateRequest $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
