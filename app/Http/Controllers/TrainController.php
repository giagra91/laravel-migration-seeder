<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $date = "2022-05-13";
        $trains = Train::whereDate("departure_date", ">=" , $date)->get();

        return view('trains.index', ["trains" => $trains]);
    }
}
