<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DataCustomers extends Controller
{
    public function index()
    {
        $datas = User::whereIsAdmin(false)->latest()->get();
        return view('pages.admin.customers.index', compact('datas'));
    }
}
