<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $from       = Carbon::now()->startOfDay();
        $to         = Carbon::now()->endOfDay();
        $donations  = DB::Table('Donations')->orderBy('created_at', 'desc')->paginate(10);
        $total      = DB::Table('Donations')->sum('Amount');
        $todayTotal = DB::Table('Donations')->whereBetween('created_at', [$from, $to])->sum('Amount');

        return view('home', compact('donations', 'total', 'todayTotal'));
    }

    public function getDonations() {

    }
}
