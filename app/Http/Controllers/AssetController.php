<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assets = Asset::all();
        return view('assets', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rating' => 'required|numeric|min:0|max:5',
            'comment' => 'required', // Adjust the max length as per your requirements
        ]);
        $asset = new Asset();
        $asset->asset_type = 'flashcard';
        $asset_Details = ["rating" => $request->rating, "comment" => $request->comment];
        $asset->asset_details = ($asset_Details);
        $asset->save();
        return response()->json([
            'success' => true,
            'data' => [
                'asset_id' => $asset->id, // Use the generated asset ID
                'asset_type' => $asset->asset_type, // Retrieve asset_type from the model
                'rating' => $asset_Details['rating'],
                'comment' => $asset_Details['comment'],
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
