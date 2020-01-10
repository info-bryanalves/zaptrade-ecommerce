<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = [];

        $employees = Employee::all();

        $data['employees'] = $employees;

        return view('pages/employees/index', $data);
    }

    public function destroy($id)
    {

        $employee = Employee::find($id);

        $employee->delete();

        return redirect('/employees');
    }

}
