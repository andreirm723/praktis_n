<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class EmployeemgtController extends Controller
{
    public function employees()
    {
        $std = DB::select('select *from employee');

        return view('employee.employees', ['Std'=>$std]);
    }

    public function Edit($Id)
    {
        $std = DB::select('select *from employee where id= '.$Id);

        return view('employee.edit_emp', ['Std'=>$std]);
    }
}
