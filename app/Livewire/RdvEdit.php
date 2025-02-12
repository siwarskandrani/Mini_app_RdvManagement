<?php

namespace App\Livewire;

use App\Livewire\Forms\RdvForm;
use App\Models\Rdv;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Edit Rendez-vous')]
class RdvEdit extends Component
{
    public RdvForm $form;

    public function mount(Rdv $rdv){
        $this->form->setRdv($rdv);
    }

    public function save(){
        $this->form->update();
    }
    public function render()
    {
        return view('livewire.rdv-edit');
    }
}
