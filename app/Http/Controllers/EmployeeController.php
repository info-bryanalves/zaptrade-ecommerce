<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = [];

        $employees = Employee::all();

        $data['employees'] = $employees;

        return view('pages/employees/index', $data);
    }


    public function create()
    {
        return view('pages/employees/form');
    }

    public function store(Request $request)
    {
        sessionON();

        $employee = new Employee;

        $employee->username = $request->username;
        $employee->password = Hash::make($request->password);
        $employee->occupation = $request->occupation;

        $employee->save();

        $_SESSION['info']['type'] = 'employee_c';

        return redirect('/employees');
    }

    public function destroy($id)
    {
        sessionON();

        $employee = Employee::find($id);

        $employee->delete();

        $_SESSION['info']['type'] = 'employee_d';

        return redirect('/employees');
    }

}
