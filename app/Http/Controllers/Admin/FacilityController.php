<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FacilityStoreRequest;
use App\Http\Requests\Admin\FacilityUpdateRequest;
use App\Models\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.admin.facilities.index', [
            'facilities' => Facility::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilityStoreRequest $request)
    {
        $inputs = $request->validated();

        $facility = Facility::create([
            'title' => $inputs['title'],
        ]);

        return redirect()->route('admin.facilities.index')->with([
            'success' => 'The facility is created.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        return view('app.admin.facilities.show', [
            'facility' => $facility,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilityUpdateRequest $request, Facility $facility)
    {
        $inputs = $request->validated();

        $facility->update([
            'title' => $inputs['title'],
        ]);

        return redirect()->route('admin.facilities.show', $facility)->with([
            'success' => 'The facility is updated.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        $facility->delete();

        return redirect()->route('admin.facilities.index')->with([
            'success' => 'The facility is deleted.',
        ]);
    }
}
