<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
        //return $queryBuilder->get();
       
      
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
     * @param  \App\Http\Requests\StoreAttivitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttivitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attivita  $attivita
     * @return \Illuminate\Http\Response
     */
    public function show(Attivita $attivita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attivita  $attivita
     * @return \Illuminate\Http\Response
     */
    public function edit(Attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttivitaRequest  $request
     * @param  \App\Models\Attivita  $attivita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attivita  $attivita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attivita $attivita)
    {
        //
    }
}
