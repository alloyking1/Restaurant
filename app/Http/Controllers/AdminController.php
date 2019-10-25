<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Handles all admin functionalities
     */

    public function Logistics(){
        return view('admin/logisticsUi');
    }
}
