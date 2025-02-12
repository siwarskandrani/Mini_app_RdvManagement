<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Edit Serrvice')]
class EditService extends Component
{

    public ServiceForm $form;
    public function mount(Service $service){
        $this->form->setServices($service);
    }

    public function save(){
        $this->form->update();
    }
    public function render()
    {
        return view('livewire.edit-service');
    }
}
