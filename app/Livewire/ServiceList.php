<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes services')]
class ServiceList extends Component
{

    #[Computed]
    public function services()
    {
        // return Service::all();
        return Service::paginate(4, pageName: 'services-page'); 

    }
    
    public function delete(Service $service){
      //  $this->authorize('delete', $service); //on appelle le methode delete qui est crée dans ServicePolicy

        $service->delete();
    }
    public function render()
    {
        return view('livewire.service-list');
    }
}
