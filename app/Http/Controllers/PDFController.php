<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    //

    public function generatePDFData(Request $request ,$id)
    {




        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf_view', $data);


        return $pdf->download('salary.pdf');

    }
}
