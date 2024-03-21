<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::paginate(25);

        return view('home', compact('trains'));
    }
}
