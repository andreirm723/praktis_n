<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practiceController extends Controller
{
   public function practice()
   {
     return view('employee.practice');
   }
}
