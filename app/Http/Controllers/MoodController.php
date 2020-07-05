<?php

namespace App\Http\Controllers;

use App\Mood;
use Illuminate\Http\Request;

class MoodController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Mood $mood)
    {
        //
    }

    public function update(Request $request, Mood $mood)
    {
        //
    }

    public function destroy(Mood $mood)
    {
        //
    }

    public function getMood()
    {
        $max = Mood::max('id');
        $id = rand(1, $max);
        return Mood::where('id', $id)->first();
    }
}
