<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
        ["name"        => "Alice",
        "email"       => "alice@gmail.com",
        "phone"       => "5525367814",
        "salary"      => "20000",
        "department"  => "Accounting"
        ],
        ["name"        => "Andrew",
        "email"       => "andrew@gmail.com",
        "phone"       => "5525858",
        "salary"      => "60000",
        "department"  => "Marketting"
        ],
        ["name"        => "Milagro",
        "email"       => "milagro@gmail.com",
        "phone"       => "235614525",
        "salary"      => "2000",
        "department"  => "Quality"
        ],
        ["name"        => "Marruco",
        "email"       => "marruco@gmail.com",
        "phone"       => "3658974558",
        "salary"      => "10000",
        "department"  => "Accounting"
        ],
        ["name"        => "Marlene",
        "email"       => "marlene@gmail.com",
        "phone"       => "55895896523",
        "salary"      => "30000",
        "department"  => "Marketting"
        ]
    ];

    Employee::insert($employees);
    return "Records are inserted";

    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }
}
