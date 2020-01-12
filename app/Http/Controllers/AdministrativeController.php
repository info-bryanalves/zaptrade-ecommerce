<?php

namespace App\Http\Controllers;

class AdministrativeController extends Controller
{

    public function index()
    {
        sessionON();

        if ($_SESSION['auth']['occupation'] == 'manager') {
            return view('pages/administrative/manager');
        }

        return view('pages/administrative/salesman');
    }
    //
}
