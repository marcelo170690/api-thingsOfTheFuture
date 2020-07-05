<?php

namespace App\Http\Controllers;

use App\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    public function index()
    {
        return Thing::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Thing $thing)
    {
        //
    }

    public function update(Request $request, Thing $thing)
    {
        //
    }

    public function destroy(Thing $thing)
    {
        //
    }

    public function getThing() {
        $max = Thing::max('id');
        $id = rand(1, $max);
        return Thing::where('id', $id)->first();
    }
}
