<?php

namespace App\Http\Controllers;

use App\Models\Programs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->page = 'Programs';
    }

    public function index()
    {
        $title    = $this->page;
        $programs = programs::paginate();

        return view('programs.index', compact('programs', 'title'));
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
            'description' => 'required',
            'amount'      => 'required'
        ]);

        $invoiceDate = Carbon::now()->toDateTimeString();

        $data = [
            'name'        => trim($request->input('name')),
            'description' => trim($request->input('description')),
            'amount'      => trim($request->input('amount')),
            'created_at'  => $invoiceDate
        ];

        DB::Table("programs")->insert($data);

        return redirect('/programs')->with('success', 'Program Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show(programs $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit(programs $programs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programs $programs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy(programs $programs)
    {
        //
    }
}
