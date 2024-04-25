<?php

namespace App\Http\Controllers;

use App\Models\Payable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PayableController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'BUR' => 'required',
            'SupplierName' => 'required',
            'EndUser' => 'required',
            'Amount' => 'required',
            'CurrentLocation' => 'required',
            'TermsPayment' => 'required',
            'Remarks' => 'required'
        ]);

        payable::create($validated);
    }
}
