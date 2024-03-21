<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::whereDate('departure_time', today()->toDateString())->get();
        return view('home', compact('trains'));
    }
}
