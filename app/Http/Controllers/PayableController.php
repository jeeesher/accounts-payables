<?php

namespace App\Http\Controllers;

use App\Models\payable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PayableController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'BUR' => 'required',
            'EndUser' => 'required',
            'Amount' => 'required',
            'TermsPayment' => 'required',
        ]);

        payable::create($validated);
    }
}
