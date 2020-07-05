<?php

namespace App\Http\Controllers;

use App\Arc;
use Illuminate\Http\Request;

class ArcController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Arc $arc)
    {
        //
    }

    public function update(Request $request, Arc $arc)
    {
        //
    }

    public function destroy(Arc $arc)
    {
        //
    }

    public function getArc(){
        $scenarios = ['Crecimiento', 'Colapso', 'Disciplina', 'Transformacion'];
        $times = [
            'A pocos años',
            'Una decada',
            'Una era',
            'Dos Generaciones',
            'Un milenio',
            'Una generación',
            'Cinco decadas',
            'Dos decadas',
        ];
        $indexOne = rand(0,3);
        $indexTwo = rand(0,count($times)-1);
        return [
            'scenario' => $scenarios[$indexOne],
            'time' => $times[$indexTwo],
        ];
    }
}
