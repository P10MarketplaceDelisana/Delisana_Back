<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaleBill;

class SaleBillController extends Controller
{
    public function index(){
        $salesBills= SaleBill::all();
        return $salesBills;
    }

    public function show($id){
        $salesBills = SaleBill::findOrFail($id);
        return $salesBills;
    }
}
