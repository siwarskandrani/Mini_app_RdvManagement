<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create service')]
class CreatService extends Component
{
    public ServiceForm $form;

    public function save(){
            $this->form->store();
    }
    
    public function render()
    {
        return view('livewire.create-service');
    }
}
