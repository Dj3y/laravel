<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::latest()->get();
        // return view('restaurants.index', ['restaurants' => Restaurant::latest()->get()]);
        return view('restaurants.index', ['restaurants' => $restaurants]);
        // return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    public function show(Restaurant $restaurant)
    {
        // $restaurant = Restaurant::findOrFail($id);
        // return view('restaurants.show', ['restaurant' => $restaurant]);
        dd($restaurant);
    }

    public function show(string $id)
    {
        // $restaurant = Restaurant::findOrFail($id);
        // return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants/edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
