<?php

namespace App\Http\Controllers;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function alladmin(){
        $quotation = Quotation::all();
        return view('admin.quotation', compact('quotaition'));
    }
}
