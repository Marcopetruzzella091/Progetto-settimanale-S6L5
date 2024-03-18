<?php

namespace App\Http\Controllers;

use App\Models\Progetto;
use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;



class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    { 
       
       
       $progetto = Progetto  :: with('attivita') ->where('user_id', '=', Auth::user()->id) ->get(); // ritorna tutti i progetti
        //return Auth::user(); // legge l'utente loggato
       // $progetto = Progetto::with('attivita')->where('user_id', '=', Auth::user()->id)->get(); // 
        return view('webapp.homepage', ['progetto' =>  $progetto]);
       //return $progetto;

       
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webapp.NewProgetto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgettoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'Nome' => $request->input('Nome'),
            'Descrizione' => $request->input('Descrizione'),
            'Tipologia' => $request->input('Tipologia'),
            'userID' => $request->input('userID'), // Assicurati che questo valore sia fornito correttamente, ad es. da auth()->id() se rappresenta l'utente autenticato
            'created_at' => now(), // Imposta il timestamp corrente
            'Stato' => $request->input('Stato'), // Assicurati che questo campo venga inviato dal form
            'LinguaggioSviluppo' => $request->input('LinguaggioSviluppo'), // Aggiunto mancante dal tuo esempio
        ];

        // Query SQL
        $sql = 'INSERT INTO progettos (Nome, Descrizione, Tipologia, LinguaggioSviluppo, Stato, User_id, created_at)
                VALUES (:Nome, :Descrizione, :Tipologia, :LinguaggioSviluppo, :Stato, :userID, :created_at)';

        // Esecuzione dell'insert
        $res = DB::insert($sql, $data);

 return $request;



       
      
    }

  
    public function show(Progetto $Progetto)
    {    
         //return   view ('webapp.detailpage', ['progetto' => $Progetto  ->load ('attivita')]); ;
      return $Progetto -> id () -> load ('attivita') ;
    }

    
    public function show2($id)
    {    
        $progetto = Progetto  :: with('attivita') ->where( 'id' , '=', $id) ->get();
      return $progetto ;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progetto  $progetto
     * @return \Illuminate\Http\Response
     */
    public function edit(Progetto $progetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgettoRequest  $request
     * @param  \App\Models\Progetto  $progetto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progetto  $progetto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progetto $progetto)
    {
        $queryBuilder = $progetto->delete();
        return $queryBuilder ? 'Post Updated' : 'Post not found!!!';
    }
}
