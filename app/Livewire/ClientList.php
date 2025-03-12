<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes clients')]
class ClientList extends Component
{
   
    #[Computed]
    public function clients()
    {
        // return Client::all();
         return Client::paginate(4, pageName: 'clients-page'); 

    }
    
    public function delete(Client $client){
        $client->delete();
    }

    public function render()
    {
        return view('livewire.client-list',
    // [        'clients' => Client::all()]
);
    }
}
