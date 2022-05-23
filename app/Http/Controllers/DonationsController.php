<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class DonationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'donor'       => 'required',
            'program'     => 'required',
            'amount'      => 'required',
            'donationfor' => 'required',
            'mode_of_payment' => 'required'
        ]);

        $invoiceDate = Carbon::now()->toDateTimeString();

        $data = [
            'donor'        => trim($request->input('donor')),
            'program'      => trim($request->input('program')),
            'amount'       => trim($request->input('amount')),
            'donation_for'  => trim($request->input('donationfor')),
            'mode_of_payment' => trim($request -> input('mode_of_payment')),
            'created_at'   => $invoiceDate
        ];

     

        $id = DB::Table("donations")->insertGetId($data);

        $user = DB::Table("members")->where('id',$data['donor'])->first();

        
    $donations  = DB::Table('donations')
    // ->join("programs","programs.id","=","donations.program")
    ->join("members", "members.id","=","donations.donor")
    ->orderBy('donations.created_at', 'desc')
    ->paginate(10);

return redirect('/')->with('success','Donation Added');
        // return view('invoices.invoice', compact('donations','data','user','invoiceDate', 'id'));

    }

    public function getDonationPrints($id) {
        $data = (array)DB::Table("donations")->where('id', $id)->first();
        // dd($data);
        $user = DB::Table("members")->where('id',$data['donor'])->first();
        // dd($user);

        //dd($data);
        $invoiceDate = $data['created_at'];
        return view('invoices.invoice', compact('data','user','invoiceDate', 'id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function show(Donations $donations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donations $donations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
