<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->email == 'danielhofer@gmail.com'){
             return view('pag/admin/clientes');
        }
        if (auth()->user()->email == 'huris.arevalo@inacapmail.cl'){
             return view('pag/admin/clientes');
        }

        if (auth()->user()->email == 'francisco.gimenez@inacapmail.cl'){
            return view('pag/admin/clientes');
       }

        return view ('pag/cliente/agendar');   
        

        
    }
}
