<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;

class AppController extends Controller
{

public function index()
{
    return view('index');
}
}
