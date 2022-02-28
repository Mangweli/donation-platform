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
            'name'        => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'amount'      => 'required',
            'donationfor' => 'required',
            'address'     => 'required'
        ]);

        $invoiceDate = Carbon::now()->toDateTimeString();

        $id = DB::Table("Donations")->insertGetId([
                        'full_name'    => trim($request->input('name')),
                        'email'        => trim($request->input('email')),
                        'phone'        => trim($request->input('phone')),
                        'amount'       => trim($request->input('amount')),
                        'donation_for' => trim($request->input('donationfor')),
                        'address'      => trim($request->input('address')),
                        'created_at'   => $invoiceDate
                ]);

        $data = $request->all();

        return view('invoices.invoice', compact('data', 'invoiceDate', 'id'));
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
