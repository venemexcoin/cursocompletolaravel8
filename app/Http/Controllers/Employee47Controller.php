<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\Employee47DataTable;

class Employee47Controller extends Controller
{
    public function index(Employee47DataTable $dataTable)
    {
        return $dataTable->render('employee47');
    }
}
