<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class Companies extends Controller
{
    function list()
    {
        $data=Customer::all();
        return view('customerview',['data'=>$data]);
    }
}
