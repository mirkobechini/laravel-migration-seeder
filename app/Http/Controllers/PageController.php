<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view("index",  compact("trains"));
    }
}
