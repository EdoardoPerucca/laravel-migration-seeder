<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        // es. per indicare i treni che partono dalla data odierna
        // $trains = Train::where('time_departure', '>=', now())->get();

        return view('home', compact('trains'));
    }
}
