<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Evento;
use App\Models\tabla;
use App\Models\Reserva;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ESTE APARTADO NOS MUESTRA LA VISTA DE EL ADMINISTRADOR

        $evento = Evento::all();
        return view('prueba1.index', compact('evento'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('prueba1.index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $datosCliente = request()->except('_token');
         Cliente::insert($datosCliente);
      // $datosCliente= request()->all(); 
        //return  response()->json($datosCliente);
        return view('prueba1.index');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //

        $evento= Evento::all();
        return response()-> json($evento);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $evento= Evento::find($id);


       // $evento->start = Carbon::createFromFormat('Y-m-d H:i:s' , $evento->start)->format('Y-m-d');
      //  $evento->end = Carbon::createFromFormat('Y-m-d H:i:s' , $evento->end)->format('Y-m-d');

        return response()-> json($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
        request()->validate(Evento::$rules);
        $evento->update($request->all());
        return response()-> json($evento); 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $evento=Evento::find($id)->delete();

        return response()-> json($evento);
    }

    public function mostrarTabla2(){

        $evento=Evento::all();
        return view ('prueba1.index', compact('evento'));
    
    }

    public function mostrarTabla3(){

        $reservaCliente=Reserva::all();
        $evento=Evento::all();
       // $todoDato=tabla1::all();

        return view ('pag.admin.clientes', compact('reservaCliente'));
        
    }

    

    
}