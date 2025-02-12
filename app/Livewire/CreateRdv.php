<?php

namespace App\Livewire;

use App\Livewire\Forms\RdvForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create rendez-vous')]
class CreateRdv extends Component
{
    public RdvForm $form;

    public function save()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.create-rdv');
    }
}
