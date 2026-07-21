<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index');
    }
}
