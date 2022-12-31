<?php

namespace App\Http\Livewire\Client;

use App\Models\Portafolio;
use Livewire\Component;
use Livewire\WithPagination;

class PortafoliosIndex extends Component
{

    use WithPagination;

    public $search ;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $portafolios = Portafolio::where('status', true)
            ->where('name','LIKE','%'.$this->search.'%')
            ->orderBy('id', 'desc')
            ->paginate(12);
        return view('livewire.client.portafolios-index', compact('portafolios'));
    }
}
