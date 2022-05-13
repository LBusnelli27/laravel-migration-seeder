<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();

        $data = [
            "train" => new Train(),
            "trains" => $trains,
        ];

        return view('train.index', $data);
    }
}
