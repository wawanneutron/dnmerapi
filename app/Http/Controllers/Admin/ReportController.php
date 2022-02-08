<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function index()
    {
        return view('pages.admin.report.index');
    }

    public function reportTransaction(Request $request)
    {
        $dataTansactions = Transaction::whereTransactionStatus('SUCCESS')
            ->whereBetween('created_at', [$request->startDate, $request->endDate])
            ->get();
        $pdf = PDF::loadView('pages.admin.report.transaction', [
            'datas' => $dataTansactions
        ])->setPaper('a4', 'landscape');
        return $pdf->stream('data-transactions.pdf');
    }
}
