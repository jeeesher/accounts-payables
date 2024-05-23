<!DOCTYPE html>
<html>
<head>
    <title>Disbursement Voucher</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header, .dv-title, .content, .footer {
            width: 100%;
        }
        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border: 2px solid #000;
            padding: 5px;
            margin: 0;
        }
        .header .sub-title {
            font-size: 12px;
            font-weight: normal;
        }
        .dv-table {
            border-spacing: 0;
            border-collapse: collapse;
            width: 100%;
            margin-top: -2px;
        }
        .dv-title {
            display: flex;
            border: 2px solid #000;
            box-sizing: border-box;
            padding: 5px;
        }
        .dv-title .main {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
        .dv-title .sub-section {
            display: flex;
            flex-direction: column;
            text-align: left;
            border-left: 2px solid #000;
            box-sizing: border-box;
            padding-left: 5px;
        }
        .dv-title .sub-text {
            font-size: 12px;
            font-weight: normal;
            margin: 1px 0;
            text-align: left;
        }
        .md {
            border-spacing: 0;
            border-collapse: collapse;
            width: 100%;
            margin-top: -3px;
        }
        .md .main {
            width: 10%;
            border: 2px solid #000;
            padding: 5px;
            text-align: left;
        }
        .md .sub-section {
            width: 90%;
            border: 2px solid #000;
            padding: 5px;
            display: flex;
            justify-content: space-between;
        }
        /* .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .form-section {
            margin-top: 20px;
        }
        .form-section .section-title {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .form-section .form-group {
            margin-bottom: 10px;
        }
        .form-section .form-group label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }
        .form-section .form-group .form-control {
            display: inline-block;
            width: calc(100% - 160px);
        }
        .signature-section {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .signature-section .signature-box {
            width: 48%;
            border: 1px solid #000;
            padding: 10px;
        }
        .signature-section .signature-box .form-group {
            margin-bottom: 20px;
        }
        .footer .footer-info {
            margin-top: 20px;
        } */
    </style>
</head>
<body>
    <div class="header">
        <div>PAMANTASAN NG LUNGSOD NG MAYNILA</div>
        <div class="sub-title">University of the City of Manila</div>
        <div class="sub-title">Intramuros, Manila</div>
    </div>
    <table class="dv-table" width="100%">
        <thead>
            <tr width="100%">
                <th class="dv-title" width="70%">
                    <span class="main">DISBURSEMENT VOUCHER</span>
                </th>
                <th class="sub-section" width="30%">
                    <span class="sub-text">No. {{ $disbursement->No }}</span> <br>
                    <span class="sub-text">Date: {{ $disbursement->Date }}</span> <br>
                </th>
            </tr>
        </thead>
    </table>
    <div>
        <table>
            <thead>
                <tr class="md" width="100%">
                    <th class="main" width="10%">
                        <span>MODE OF PAYMENT</span>
                    </th>
                    <th class="sub-section items-flex" width="90%">
                        <input type="checkbox" {{ $disbursement->ModePayment == 'Check' ? 'checked' : '' }}> Check </input>
                        <input type="checkbox" {{ $disbursement->ModePayment == 'Cash' ? 'checked' : '' }}> Cash </input>
                        <input type="checkbox" {{ $disbursement->ModePayment == 'Others' ? 'checked' : '' }}> Others </input>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    
        
        <!-- <div class="content">
            <div class="form-section">
                <div class="form-group">
                    <label><Mode of Payment:/label>
                    <div class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label>Payee:</label>
                    <div class="form-control">{{ $disbursement->Payee }}</div>
                </div>
                <div class="form-group">
                    <label>TIN/Employee No:</label>
                    <div class="form-control">{{ $disbursement->TIN }}</div>
                </div>
                <div class="form-group">
                    <label>BUR No:</label>
                    <div class="form-control">{{ $disbursement->BUR }}</div>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <div class="form-control">{{ $disbursement->Address }}</div>
                </div>
                <div class="form-group">
                    <label>Responsibility Center</label>
                    <div class="form-control">
                        Office/Unit/Project: {{ $disbursement->RCOffice }}<br>
                        Code: {{ $disbursement->RCCode }}
                    </div>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <div class="form-control">{{ $disbursement->Date }}</div>
                </div>
            </div>
            <div class="table-section">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Explanation</th>
                            <th>Amount</th>
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
            </div>
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
            <div class="footer-info">
                <div class="form-group">
                    <label>Check No:</label>
                    <div class="form-control">{{ $disbursement->CheckNo }}</div>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <div class="form-control">{{ $disbursement->CheckDate }}</div>
                </div>
                <div class="form-group">
                    <label>Bank Name:</label>
                    <div class="form-control">{{ $disbursement->BankName }}</div>
                </div>
                <div class="form-group">
                    <label>OR No./Other Documents:</label>
                    <div class="form-control">{{ $disbursement->ORNo }}</div>
                </div>
                <div class="form-group">
                    <label>JEV No:</label>
                    <div class="form-control">{{ $disbursement->JEVNo }}</div>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <div class="form-control">{{ $disbursement->JEVDate }}</div>
                </div>
            </div>
        </div> -->
</body>
</html>
