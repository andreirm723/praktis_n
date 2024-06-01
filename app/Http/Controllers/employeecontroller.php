<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    
    public function index()
    {
        return view('employee.index');
    }


    public function SavedData(Request $req)
    {
        $lname = $req->input('lname');
        $fname = $req->input('fname');
        $mname = $req->input('mname');
        $add= $req->input('address');
        $country= $req->input('country');
        $state = $req->input('state');
        $city = $req->input('city');
        $zip = $req->input('zip');
        $bday = $req->input('bday');
        $hdate = $req->input('hdate');
        $dept = $req->input('department');
        
        $cbdate = Carbon::parse($bday);
        $format = $cbdate->format('Y-m-d H:i:s');
        $cbdate1 = Carbon::parse($hdate);
        $format1 = $cbdate1->format('Y-m-d H:i:s');
    DB::insert("INSERT INTO employee(lastname, firstname, middlename, address,country, state, city, zip, birthdate, date_hired, department) VALUES ('$lname','$fname','$mname','$add','$country','$state','$city','$zip','$bday','$hdate','$dept')");
    return view('employee.index');


    
}
}
