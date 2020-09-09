<?php

namespace App\Http\Controllers;

use App\Serie;

class SeriesController
{
    public function index()
    {
        return Serie::all();
    }
}
