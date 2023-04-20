<?php

namespace App\Http\Livewire\Client;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesIndex extends Component
{

    use WithPagination;

    public $search ;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {

        $services = Service::where('status', true)
        ->where('name','LIKE','%'.$this->search.'%')
        ->orderBy('id', 'desc')
        ->paginate(12); 

        // return $services;
        

       


        return view('livewire.client.services-index',compact('services'));
    }
}
