<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class TrainsController extends Controller
{
    public function index()
  {
      $title= 'Train';
      
      $trains = Trains::all();
  }
  
}

