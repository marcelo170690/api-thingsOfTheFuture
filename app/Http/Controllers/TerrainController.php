<?php

namespace App\Http\Controllers;

use App\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Terrain $terrain)
    {
        //
    }

    public function update(Request $request, Terrain $terrain)
    {
        //
    }

    public function destroy(Terrain $terrain)
    {
        //
    }

    public function getTerrain()
    {
        $max = Terrain::max('id');
        $quantity = rand(1, 2);
        if ($quantity===1){
            $id = rand(1, $max);
            return [
                'thing1' => Terrain::where('id', $id)->first(),
            ];
        } else {
            $id1 = rand(1, $max);
            $id2 = rand(1, $max);
            return [
                'thing1' => Terrain::where('id', $id1)->first(),
                'thing2' => Terrain::where('id', $id2)->first(),
            ];
        }
    }
}
