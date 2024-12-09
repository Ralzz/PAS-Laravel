<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Snack;


class SanckController extends Controller
{
   public function index() 
   {
    $snack = Snack::all();
    return view('snack.index', ['snack' => $snack]);
   }
}
