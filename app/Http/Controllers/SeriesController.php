<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries()
    {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        return response()->json($series);
    }
}
