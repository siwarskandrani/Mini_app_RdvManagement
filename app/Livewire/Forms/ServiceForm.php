<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceForm extends Form
{
    public ?Service $service;

    #[Validate('required')]
    public  $description;

    #[Validate('required|numeric')]
    public  $price ;

    public function store(){
        $this->validate();
        Service::create($this->only(['description', 'price']));

        session()->flash('success', 'Service ajouté avec succès.');

        // Réinitialisation des champs du formulaire
        $this->resetForm();

    }

    public function setServices(Service $service){
        $this->service=$service;
        $this->description=$service->description;
        $this->price=$service->price;

    }

    public function update(){
        $this->validate();
        $this->service->update($this->only(['description','price']));


        session()->flash('success', 'Service updated avec succès.');

        // Réinitialisation des champs du formulaire après update
        $this->resetForm();

    }
     // Méthode pour réinitialiser les champs du formulaire
     private function resetForm()
     {
         $this->description = '';
         $this->price = null;
     }
}
