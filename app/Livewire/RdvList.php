<?php

namespace App\Livewire;

use App\Models\Rdv;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes rendez-vous')]
class RdvList extends Component
{

    #[Computed]
    public function rdvs()
    {
        // return Rdv::with('client', 'service')->get(); //on a importé les methodes client et service implémenté dans le modele rdv
        return Rdv::with('client', 'service')->paginate(4, pageName: 'rdvs-page'); //on a importé les methodes client et service implémenté dans le modele rdv
       // with('client', 'service') c le eager loading qui permet de empecher les requetes dupliqués
        
    }
    
    public function delete(Rdv $service){
        $service->delete();
    }

    public function render()
    {
        return view('livewire.rdv-list');
    }
}
