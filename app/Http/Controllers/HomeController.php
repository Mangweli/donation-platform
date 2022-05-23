<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    private $page;
    private $total;
    private $todayTotal;
    private $donors;
    private $programs;
    private $modes_of_payment;
    /**
     * Create a new controller instance.
     * @param  string  $donors;
     * @return void
     */
   
    
    public function __construct()
    {
        $this->middleware('auth');
        //$this->page = 'Dashboard';
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // @param  string  $id;

   

    public function index(Request $request)

    {

    $from                   = Carbon::now()->startOfDay();
    $to                     = Carbon::now()->endOfDay();
    $this->title            = "Dashboard";
    $this->todayTotal       = DB::Table('donations')->whereBetween('created_at', [$from, $to])->sum('amount');
    $this->total            = DB::Table('donations')->sum('amount');
    $this->donors    = DB::Table('members')->get();
    $this->programs  = DB::Table('programs')->get();
    $this->modes_of_payment = DB::Table('modes_of_payment')->get();
    $this->donations  = DB::Table('donations')
                                    ->join("programs","programs.id","=","donations.program")
                                    ->join("members", "members.id","=","donations.donor")
                                    ->orderBy('donations.created_at', 'desc')
                                    ->select('members.*','donations.*','programs.name as name',
                                        'donations.amount as donation_amount', 
                                        'programs.amount as program_amount')
                                    ->paginate(10);

                                    $donations = $this->donations;
                                    $total = $this->total;
                                    $todayTotal = $this->todayTotal;
                                    $modes_of_payment = $this->modes_of_payment;
                                    $programs = $this->programs;
                                    $donors = $this->donors;
                                    $title = $this->title;

         return view('home',compact(
                                    'donations', 
                                    'total',
                                    'todayTotal',
                                    'title' ,
                                    'donors' ,
                                    'programs',
                                    'modes_of_payment')
                                     
                                    );
    }






    // getExistingDonations that much the search variable

    public function getDonations(Request $request) {ce

        $name  = $request->input('name');

        $this->title            = "Dashboard";
$from                   = Carbon::now()->startOfDay();
$to                     = Carbon::now()->endOfDay();
$this->title            = "Dashboard";
$this->todayTotal       = DB::Table('donations')->whereBetween('created_at', [$from, $to])->sum('amount');
$this->total            = DB::Table('donations')->sum('amount');
$this->donors    = DB::Table('members')->get();
$this->programs  = DB::Table('programs')->get();
$this->modes_of_payment = DB::Table('modes_of_payment')->get();
        $this->donations = DB::Table('donations')
                                ->join("members", "members.id","=","donations.donor")
                                ->select('members.*','donations.*','donations.donation_for as name', 'donations.amount as donation_amount',)
                                ->where('members.first_name', "like", '%'.$name.'%')
                                ->get()
                                ->toArray();

       

$donations = $this->donations;
$title = $this->title;
$total = $this->total;
$todayTotal = $this->todayTotal;
$modes_of_payment = $this->modes_of_payment;
$programs = $this->programs;
$donors = $this->donors;


return view('home',compact('title','total','todayTotal','donations','donors','programs','modes_of_payment'));
                                  
    }


 

}
