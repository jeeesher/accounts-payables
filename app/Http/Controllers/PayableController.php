<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\payable;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class PayableController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'BUR' => ['required', 'string', 'min:13',  'max:13', 'unique:payables'],
            'SupplierName' => ['required', 'string', 'exists:suppliers,SupplierName'],
            'EndUser' => 'required',
            'Amount' => 'required',
            'TermsPayment' => 'required',
        ]);

        if (Payable::where('BUR', $validated['BUR'])->exists()) {
            return redirect()->back()->with('error', 'The provided BUR is already in use. Please try a different one.');
        }

        // Create a new payable
        $payable = payable::create($validated);

        // Create a new file record or update an existing one
        $fileRecord = Files::where('BUR', $payable->BUR)->firstOrNew([]);
        $fileRecord->BUR = $payable->BUR;

        if ($request->hasFile('IAR_File')) {
            // Validate the file
            $validated = $request->validate([
                'IAR_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'IAR_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for IAR uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('IAR_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_IAR_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->IAR_File = $path.$filename;
        }

        if ($request->hasFile('SRIDE_File')) {
            // Validate the file
            $validated = $request->validate([
                'SRIDE_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'SRIDE_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for SRIDE uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('SRIDE_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_SRIDE_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->SRIDE_File = $path.$filename; 
        }

        if ($request->hasFile('RIS_File')) {
            // Validate the file
            $validated = $request->validate([
                'RIS_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'RIS_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for RIS uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('RIS_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_RIS_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->RIS_File = $path.$filename; 
        }

        if ($request->hasFile('DR_File')) {
            // Validate the file
            $validated = $request->validate([
                'DR_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'DR_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for DR uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('DR_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_DR_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->DR_File = $path.$filename; 
        }

        if ($request->hasFile('SI_File')) {
            // Validate the file
            $validated = $request->validate([
                'SI_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'SI_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for SI uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('SI_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_SI_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->SI_File = $path.$filename; 
        }

        if ($request->hasFile('CRPO_File')) {
            // Validate the file
            $validated = $request->validate([
                'CRPO_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'CRPO_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for CRPO uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('CRPO_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_CRPO_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->CRPO_File = $path.$filename; 
        }

        if ($request->hasFile('BUR_File')) {
            // Validate the file
            $validated = $request->validate([
                'BUR_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',  
                'BUR_File.mimes' => 'Only PDF, JPEG, PNG, and JPG files are allowed for BUR uploads.'
            ]); 
            
            // Save the file
            $file = $request->file('BUR_File');
            $extension = $file->getClientOriginalExtension();

            $filename = $payable->BUR.'_BUR_File.'.$extension;

            $path = 'uploads/payables/';
            $file->move($path, $filename);

            $fileRecord->BUR_File = $path.$filename; 
        }

        $fileRecord->save();

        return redirect()->back()->with('success', 'Payable created successfully!'); 
    }
}
