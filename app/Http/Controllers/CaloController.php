<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaloController extends Controller
{
    public function Calo() {
        session_start();

        return view('client/calo');
    }
    public function Nutrition() {
        session_start();

        return view('client/nutrition');
    }
    public function Planner() {
        session_start();

        return view('client/planner');
    }
}
