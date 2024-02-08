<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class GuestTrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('guest.index', compact('trains'));
    }
}
