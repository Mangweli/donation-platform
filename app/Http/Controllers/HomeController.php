<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    private $page;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->page = 'Dashboard';

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $title      = $this->page;
        $from       = Carbon::now()->startOfDay();
        $to         = Carbon::now()->endOfDay();
        $total      = DB::Table('donations')->sum('Amount');
        $todayTotal = DB::Table('donations')->whereBetween('created_at', [$from, $to])->sum('Amount');
        $donors     = DB::Table('members')->get();
        $programs   = DB::Table('programs')->get();

         //dd($donors, $programs);

        if($request->has('name')) {
            $donations  = DB::Table('donations')
                            ->where("full_name","like","%".trim($request->get('name'))."%")
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
        }else{
            $donations  = DB::Table('donations')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }

        return view('home', compact('donations', 'total', 'todayTotal','title', 'donors', 'programs'));
    }

    public function getDonations() {

    }
}
