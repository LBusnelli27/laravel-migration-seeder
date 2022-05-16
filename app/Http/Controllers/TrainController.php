<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = Train::all();

        $data = [
            "train" => new Train(),
            "trains" => $trains,
        ];

        return view('train.index', $data);
    }
}
