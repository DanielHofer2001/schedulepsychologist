<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Evento;
use Livewire\Component;

class show_horas extends Component
{
    use WithPagination;
    public $fechaIn;
    public $fechaFin;

    public function mount()
    {
        if (evento::orderby('start')->count()) {
            $this->fechaIn = date('Y-m-d');
        } else {
            $this->fechaIn = date('Y-m-d');
        }
        $this->fechaFin = date('Y-m-d');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $error = false;

        $all = evento::select('evento.*')
            ->where('start', '>=', $this->fechaIn . ' 00:00:00')
            ->where('start', '<=', $this->fechaFin . ' 23:59:59');
            $evento = $all;
        if ($this->fechaIn > $this->fechaFin)
         {
            $error = true;
         }
        return view('pag.clientes.gestionar_hora', compact('evento','error','all'));
    }
}