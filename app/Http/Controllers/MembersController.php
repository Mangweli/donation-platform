<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use DB;

use Carbon\Carbon;

class MembersController extends Controller
{
    private $page;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->page = 'Members';
     }

    public function index()
    {
        $title = $this->page;
        $members = Members::paginate();
        return view('members', compact('members', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'address'   => 'required'
        ]);

        $invoiceDate = Carbon::now()->toDateTimeString();

        $data = [
            'first_name' => trim($request->input('firstname')),
            'last_name'  => trim($request->input('lastname')),
            'email'      => trim($request->input('email')),
            'phone'      => trim($request->input('phone')),
            'address'    => trim($request->input('address')),
            'created_at' => $invoiceDate
        ];

        DB::Table("members")->insert($data);

        return redirect('/members')->with('success', 'Donor Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        //
    }
}
