<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(){
        $customer = User::count();
        $transaction = Transaction::count();
        $revenue = Transaction::sum('total_price');
        return view('pages.admin.dashboard',[
            'customer' => $customer,
            'transaction' => $transaction,
            'revenue' => $revenue
        ]);
    }
}
