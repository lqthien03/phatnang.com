<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liquidation;
class LiquidationController extends Controller
{
    public function all(){
        $liquidation = Liquidation::all();
        return view('liquidation', compact('liquidation'));
    }
}
