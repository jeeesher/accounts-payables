<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp&display=swap" rel="stylesheet" /> -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .header {
            border: 2px solid black;
            text-align: center;
        }
        .header div {
            margin: 5px 0;
        }
        .dv-table {
            width: 100%;
            border-collapse: collapse;
        }
        .dv-table th, .dv-table td {
            border-bottom: 2px solid black;
            border-left: 2px solid black;
            border-right: 2px solid black;
            text-align: center;
        }
        .dv-title {
            font-size: 1.5em;
            font-weight: bold;
        }
        .sub-section {
            text-align: right;
        }
        .sub-text {
            display: block;
        }
        .mode-of-payment th, .mode-of-payment td {
            border-bottom: 2px solid black;
            border-left: 2px solid black;
            border-right: 2px solid black;
            padding: 8px;
            text-align: left;
        }
        .explanation-table, .signature-table, .footer-info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .explanation-table th, .explanation-table td, .signature-table th, .signature-table td, .footer-info-table th, .footer-info-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .signature-section {
            display: flex;
            justify-content: space-between;
        }
        .signature-box {
            width: 48%;
            border: 1px solid black;
            padding: 8px;
        }
        .signature-box .form-group {
            margin: 10px 0;
        }
        .footer-info {
            margin-top: 20px;
        }
        .footer-info .form-group {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div>PAMANTASAN NG LUNGSOD NG MAYNILA</div>
        <div class="sub-title">University of the City of Manila</div>
        <div class="sub-title">Intramuros, Manila</div>
    </div>
    <table class="dv-table">
        <thead>
            <tr>
                <th class="dv-title items-center" colspan="2">DISBURSEMENT VOUCHER</th>
                <th class="sub-section">
                    <span class="sub-text">No. {{ $disbursement->No }}</span>
                    <span class="sub-text">Date: {{ $disbursement->Date }}</span>
                </th>
            </tr>
        </thead>
    </table>
    <table class="mode-of-payment" width="100%">
        <thead>
            <tr>
                <th width="20%">MODE OF PAYMENT</th>
                <td class="items-center" width="80%">
                    <input class="m-3" type="checkbox"> Check </input>
                    <input class="m-3" type="checkbox"> Cash </input>
                    <input class="m-3" type="checkbox"> Others </input>
                </td>
            </tr>
        </thead>
    </table>
    <table class="explanation-table">
        <thead>
            <tr>
                <th>EXPLANATION</th>
                <th>AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disbursement->payable->otherParticulars as $particular)
            <tr>
                <td>{{ $particular->ParticularDesc }}</td>
                <td>Php {{ number_format($particular->ParticularAmount, 2) }}</td>
            </tr>
            @endforeach
            <tr>
                <td>Total</td>
                <td>Php {{ number_format($disbursement->payable->otherParticulars->sum('ParticularAmount'), 2) }}</td>
            </tr>
        </tbody>
    </table>
    <div class="signature-section">
        <div class="signature-box">
            <div class="section-title">A. Certified</div>
            <div class="form-group">
                <label>Supporting Documents:</label>
                <div class="form-control">{{ $disbursement->Certified }}</div>
            </div>
            <div class="form-group">
                <label>Signature:</label>
                <div class="form-control">{{ $disbursement->CertifiedBy }}</div>
            </div>
            <div class="form-group">
                <label>Printed Name:</label>
                <div class="form-control">{{ $disbursement->CertifiedBy }}</div>
            </div>
            <div class="form-group">
                <label>Position:</label>
                <div class="form-control">{{ $disbursement->CertifiedPosition }}</div>
            </div>
        </div>
        <div class="signature-box">
            <div class="section-title">B. Approved for Payment</div>
            <div class="form-group">
                <label>Signature:</label>
                <div class="form-control">{{ $disbursement->ApprovedBy }}</div>
            </div>
            <div class="form-group">
                <label>Printed Name:</label>
                <div class="form-control">{{ $disbursement->ApprovedBy }}</div>
            </div>
            <div class="form-group">
                <label>Position:</label>
                <div class="form-control">{{ $disbursement->ApprovedPosition }}</div>
            </div>
        </div>
    </div>
    <table class="footer-info-table">
        <thead>
            <tr>
                <th colspan="2">C. Received Payment</th>
                <th colspan="2">JEV No.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Check No.:</td>
                <td>{{ $disbursement->CheckNo }}</td>
                <td>OR No./Other Documents:</td>
                <td>{{ $disbursement->ORNo }}</td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ $disbursement->CheckDate }}</td>
                <td>JEV No.:</td>
                <td>{{ $disbursement->JEVNo }}</td>
            </tr>
            <tr>
                <td>Bank Name:</td>
                <td>{{ $disbursement->BankName }}</td>
                <td>Date:</td>
                <td>{{ $disbursement->JEVDate }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
