<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\payable;
use App\Models\Supplier;
use App\Models\Particular;
use App\Models\Disbursement;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Barryvdh\DomPDF\Facade\Pdf;


class PayableController extends Controller
{
    // creating new payable
    public function store(Request $request)
    {
        $validated = $request->validate([
            'BUR' => ['required', 'string', 'min:13',  'max:13', 'unique:payables'],
            'SupplierName' => ['required', 'string', 'exists:suppliers,SupplierName'],
            'EndUser' => 'required',
            'Amount' => 'required',
            'TermsPayment' => 'required',
            'particulars.*.ParticularDesc' => ['required', 'string'],
            'particulars.*.ParticularAmount' => ['required', 'numeric'],
        ]);

        if (Payable::where('BUR', $validated['BUR'])->exists()) {
            return redirect()->back()->with('error', 'The provided BUR is already in use. Please try a different one.');
        }

        $payableData = [
            'BUR' => $validated['BUR'],
            'SupplierName' => $validated['SupplierName'],
            'EndUser' => $validated['EndUser'],
            'Amount' => $validated['Amount'],
            'TermsPayment' => $validated['TermsPayment'],
        ];

        // Create a new payable
        $payable = Payable::create($payableData);

        // Create a new file record or update an existing one
        $fileRecord = Files::where('BUR', $payable->BUR)->firstOrNew([]);
        $fileRecord->BUR = $validated['BUR'];

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

        foreach ($validated['particulars'] as $particularData) {
            $particular = new Particular();
            $particular->BUR = $validated['BUR'];
            $particular->ParticularDesc = $particularData['ParticularDesc'];
            $particular->ParticularAmount = $particularData['ParticularAmount'];
            $particular->save();
        }

        return redirect('/payables/view?payable=' . $validated['BUR'])->with('success', 'Payable created successfully!'); 
    }

    // deleting payable
    public function delete($iden)
    {
        $payable = Payable::where('BUR', $iden)->first()->delete();

        return redirect('/payables');
    }

    // updating payable
    public function edit($id)
    {   
        $payable = Payable::where('BUR', $id)->first();

        return route('/payables/edit?payable=' . $payable -> BUR, compact('payable'));
    }

    public function update(Request $request)
    {
        // Fetch the existing payable record
        $payable = Payable::where('BUR', $request->BUR)->firstOrFail();

        // Validate the request data
        $validated = $request->validate([
            'BUR' => ['required', 'string', 'min:13', 'max:13'],
            'SupplierName' => ['required', 'string', 'exists:suppliers,SupplierName'],
            'EndUser' => 'required',
            'Amount' => 'required',
            'TermsPayment' => 'required',
            'particulars.*.ParticularDesc' => ['required', 'string'],
            'particulars.*.ParticularAmount' => ['required', 'numeric'],
            'particulars.*.identifier' => ['nullable'],
            'newparticulars.*.ParticularDesc' => ['nullable', 'string'],
            'newparticulars.*.ParticularAmount' => ['nullable', 'numeric'],
            'DV_File' => 'file|mimes:pdf,jpeg,png,jpg|max:5120',
        ]);

        // Update the payable record with validated data
        $payable->update([
            'BUR' => $validated['BUR'],
            'SupplierName' => $validated['SupplierName'],
            'EndUser' => $validated['EndUser'],
            'Amount' => $validated['Amount'],
            'TermsPayment' => $validated['TermsPayment'],
        ]);

        // Sync particulars
        $existingParticularIds = $payable->particulars()->pluck('id')->toArray();
        $newParticularIds = [];


        if(count($validated['particulars']) > 0)
        {
            foreach ($validated['particulars'] as $particularData) {
                $particular = Particular::find($particularData['identifier']);
                $particular->update([
                    'ParticularDesc' => $particularData['ParticularDesc'],
                    'ParticularAmount' => $particularData['ParticularAmount'],
                ]);

                $newParticularIds[] = (int)$particularData['identifier'];
            }
        }
        
        $particularsToDelete = array_diff($existingParticularIds, $newParticularIds);

        foreach ($validated['newparticulars'] as $particularData) {
            if (isset($particularData['ParticularDesc']) && isset($particularData['ParticularAmount'])) {
                $particular = new Particular();
                $particular->BUR = $payable->BUR;
                $particular->ParticularDesc = $particularData['ParticularDesc'];
                $particular->ParticularAmount = $particularData['ParticularAmount'];
                $particular->save();
            }
        }

        // Delete removed particulars
        foreach ($particularsToDelete as $particularId) {
            Particular::where('ID', $particularId)->delete();
        }

        // Create a new file record or update an existing one
        $fileRecord = Files::where('BUR', $payable->BUR)->firstOrNew([]);

        if ($request->hasFile('DV_File')) {
            // Save the file
            $file = $request->file('DV_File');
            $extension = $file->getClientOriginalExtension();
            $filename = $payable->BUR.'_DV_File.'.$extension;
            $path = 'uploads/payables/';
            $file->move($path, $filename);
            $fileRecord->DV_File = $path.$filename;
            $fileRecord->BUR = $payable->BUR;
            DB::table('files')
                ->where('BUR', $payable->BUR)
                ->update([
                    'DV_File' => $path.$filename,
                ]);
        }

        return redirect('/payables/view?payable=' . $payable->BUR)->with('success', 'Payable updated successfully!');
    }

    // getting supplier info
    public function SupplierInfo($supplier)
    {
        $supplierInfo = Supplier::where('SupplierName', $supplier)->first();

        $address = $supplierInfo->Address;
        $contact = $supplierInfo->ContactNumber;

        return response()->json(['address' => $address, 'contact' => $contact]);
    }

    // getting particular info
    public function show($id)
    {
        $payable = Payable::with('particulars')->find($id);

        return view('/payables/view', compact('payable'));
    }    

    // creating dv
    public function generateDv(Request $request)
    {
        $validated = $request->validate([
            'No' => ['required'],
            'Date' => ['required', 'date'],
            'ModePayment' => ['required', 'in:Check,Cash,Others'],
            'Payee' => ['required', 'string', 'max:255'],
            'TIN' => ['required', 'string', 'max:255'],
            'BUR' => ['required', 'string', 'min:13',  'max:13', 'exists:payables,BUR'],
            'Address' => ['required', 'string', 'max:255'],
            'RCOffice' => ['required', 'string', 'max:255'],
            'RCCode' => ['required', 'string', 'max:255'],
            'Certified' => ['nullable'],
            'CertifiedBy' => ['nullable', 'string', 'max:255'],
            'CertifiedPosition' => ['nullable', 'string', 'max:255'],
            'Approved' => ['nullable', 'in:Approved,Not Approved'],
            'ApprovedBy' => ['nullable', 'string', 'max:255'],
            'ApprovedPosition' => ['nullable', 'string', 'max:255'],
            'CheckNo' => ['nullable', 'string', 'max:255'],
            'CheckDate' => ['nullable', 'date'],
            'BankName' => ['nullable', 'string', 'max:255'],
            'CheckName' => ['nullable', 'string', 'max:255'],
            'JEVNo' => ['nullable', 'string', 'max:255'],
            'JEVDate' => ['nullable', 'date'],
            'ORNo' => ['nullable', 'string', 'max:255'],
        ]);

        $disbursementData = [
            'No' => $validated['No'],
            'Date' => $validated['Date'],
            'ModePayment' => $validated['ModePayment'],
            'Payee' => $validated['Payee'],
            'TIN' => $validated['TIN'],
            'BUR' => $validated['BUR'],
            'Address' => $validated['Address'],
            'RCOffice' => $validated['RCOffice'],
            'RCCode' => $validated['RCCode'],
            'Certified' => $validated['Certified'],
            'CertifiedBy' => $validated['CertifiedBy'],
            'CertifiedPosition' => $validated['CertifiedPosition'],
            'Approved' => $validated['Approved'],
            'ApprovedBy' => $validated['ApprovedBy'],
            'ApprovedPosition' => $validated['ApprovedPosition'],
            'CheckNo' => $validated['CheckNo'],
            'CheckDate' => $validated['CheckDate'],
            'BankName' => $validated['BankName'],
            'CheckName' => $validated['CheckName'],
            'JEVNo' => $validated['JEVNo'],
            'JEVDate' => $validated['JEVDate'],
            'ORNo' => $validated['ORNo']
        ];

        $disbursement = Disbursement::where('No', $validated['No'])->first();

        if ($disbursement) {
            $disbursement->update($disbursementData);
        } else {
            $disbursement = Disbursement::create($disbursementData);
        }

        return redirect('/accounting/dv/view?payable=' . $disbursement->BUR)->with('success', 'Disbursement saved successfully!'); 
    }

    // adding track
    public function addTrack($id, Request $request){
        $validated = $request->validate([
            'CurrentLocation' => ['required', 'string', 'max:255'],
            'CurrentStatus' => ['required', 'string', 'max:255'],
        ]);

        $trackData = [
            'BUR' => $id,
            'CurrentLocation' => $validated['CurrentLocation'],
            'CurrentStatus' => $validated['CurrentStatus'],
            'CurrentDate' => now()->toDateString(),
            'CurrentTime' => now(),
        ];

        // Create a new track
        $track = Track::create($trackData);

        return redirect('/tracking/view?payable=' . $track->BUR)->with('success', 'Tracking added successfully!');
    }

    public function updateTrack($id, Request $request){
        $validated = $request->validate([
            'CurrentLocation' => ['required', 'string', 'max:255'],
            'CurrentStatus' => ['required', 'string', 'max:255'],
            'CurrentDate' => ['required', 'date'],
        ]);

        Track::where('ID', $id)->update([
            'CurrentLocation' => $validated['CurrentLocation'],
            'CurrentStatus' => $validated['CurrentStatus'],
            'CurrentDate' => $validated['CurrentDate'],
            'CurrentTime' => now(),
        ]);

        $track = Track::where('ID', $id)->first();

        return redirect('/tracking/view?payable=' . $track->BUR)->with('success', 'Tracking updated successfully!');
    }

    public function downloadDV($id){
        $disbursement = Disbursement::findOrFail($id);
        $data = ['disbursement' => $disbursement];
        
        $pdf = Pdf::loadView('pdf.invoice', $data);
        return $pdf->download('dv' . $disbursement->BUR . '.pdf');
    }
}
