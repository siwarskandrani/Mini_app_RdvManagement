<?php

namespace App\Livewire;

use App\Livewire\Forms\ClientForm;
use App\Models\Client;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Edit client')]
class EditClient extends Component
{
        public ClientForm $form;

    public function mount(Client $client){
        $this->form->setClient($client);
    }

    public function save(){
        $this->form->update();
    }

    public function render()
    {
        return view('livewire.edit-client');
    }
}
