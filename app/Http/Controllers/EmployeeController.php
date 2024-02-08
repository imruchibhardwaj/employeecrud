<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Employee;

class EmployeeController extends Controller
{
    public function insert(Request $request){
        // dd ($request->all());/////
        // $validator = Validator::

        $employees =  new Employee();
        $employees->name = $request->name;
        $employees->email = $request->email;
        $employees->passward = $request->passward;
        $employees->address = $request->address;
        $employees->city = $request->city;
        $employees->pin_code = $request->pin_code;
        $employees->state = $request->state;
        $employees->save();

        return redirect()->back();
        

        

    }
    
}
