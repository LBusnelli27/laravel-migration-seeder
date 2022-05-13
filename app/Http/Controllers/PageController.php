<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        return view('train.index');
    }
}
