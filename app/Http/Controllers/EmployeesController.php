<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function add() {
        return view('employee/add-employee');
    }
}
