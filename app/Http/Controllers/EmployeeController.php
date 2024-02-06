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
        $employees->employee = $request->select_emp;
        $employees->employee_product = $request->select_docs;
        $employees->employee_address = $request->address;
        $employees->save();

        return redirect()->back();

        

    }
}
