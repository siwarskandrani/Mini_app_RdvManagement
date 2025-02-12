<?php

namespace App\Livewire;

use App\Livewire\Forms\ClientForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create client')]
class CreatClient extends Component
{
    public ClientForm $form;

    
    public function save()
    {
      // dd('Save function triggered'); 
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.creat-client');
    }
}
