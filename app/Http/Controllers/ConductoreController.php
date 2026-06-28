<?php

namespace App\Http\Controllers;

use App\Models\Conductore;
use Illuminate\Http\Request;

class ConductoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conductores = Conductore::all();
        return view('conductores.index', compact('conductores'));

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Conductore $conductore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conductore $conductore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conductore $conductore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conductore $conductore)
    {
        //
    }
}
