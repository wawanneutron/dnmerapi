<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function transaksi()
    {
        $dataTansactions = Transaction::where('transaction_status', 'SUCCESS')->get();
        $pdf = PDF::loadView('pages.admin.report.transaction', [
            'datas' => $dataTansactions
        ])->setPaper('a4', 'landscape');
        return $pdf->stream('data-transactions.pdf');
    }
}
