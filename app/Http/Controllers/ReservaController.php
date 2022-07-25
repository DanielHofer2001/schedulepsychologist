<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           return view('pag.cliente.agendar');
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
        //
        //$datosCliente= request()->all(); 
       //return  response()->json($datosCliente);
        //$reservaCliente = request()->except('_token');
        //var_dump($reservaCliente);
        //die();
        $reservaCliente = new Reserva();

        $reservaCliente->nombre = $request->nombre;
        $reservaCliente->apellido = $request->apellido;
        $reservaCliente->telefono = $request->telefono;
        $reservaCliente->email = $request->email;
        $reservaCliente->descripcion = $request->descripcion;


        $reservaCliente->save();

        //Reserva::insert($reservaCliente);
        return redirect() -> route('agendar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reservaCliente)
    {
        //

        $reservaCliente= Reserva::all();
        return response()-> json($reservaCliente);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $reservaCliente= Reserva::find($id);


       // $evento->start = Carbon::createFromFormat('Y-m-d H:i:s' , $evento->start)->format('Y-m-d');
      //  $evento->end = Carbon::createFromFormat('Y-m-d H:i:s' , $evento->end)->format('Y-m-d');

        return response()-> json($reservaCliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reservaCliente)
    {
        //
        request()->validate(Reserva::$rules);
        $reservaCliente->update($request->all());
        return response()-> json($reservaCliente); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reservaCliente)
    {
        //
        //$reservaCliente=Reserva::find($id)->delete();
        //return response()-> json($reservaCliente);
        $reservaCliente->delete();
        return back();
    }

    public function mostrarReserva(){

        $reservaCliente=Reserva::all();
        return view ('pag.cliente.agendar', compact('reservaCliente'));
        
    
    }

}