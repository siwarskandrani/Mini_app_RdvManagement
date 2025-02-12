<?php

namespace App\Livewire\Forms;

use App\Models\Client;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientForm extends Form
{
    public ?Client $client;

    public string $name;
    public string $email;
    public string $phone;

    public function store()
    {
        $this->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:clients,email',  // Validation unique
                'phone' => 'nullable',
            ]
        );

        Client::create($this->only(['name', 'email', 'phone']));

        session()->flash('success', 'Client ajouté avec succès.');

        // Réinitialisation des champs du formulaire
        $this->resetForm();
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
        $this->name = $client->name;
        $this->email = $client->email;
        $this->phone = $client->phone;
    }

    // Méthode pour mettre à jour un client existant
    public function update()
    {
        if ($this->client) {
            $this->validate(
                [
                    'name' => 'required',
                    //si on n'a pas mis unique dans la migration on peut juste faire : 'email' => 'required|email',
                    'email' => 'required|email|unique:clients,email,' . $this->client->id,  // cvd on ignore cette valdation de email doit etre unique
                    'phone' => 'nullable',
                ]
            );

            $this->client->update($this->only(['name', 'email', 'phone']));

            session()->flash('success', 'Client updated avec succès.');

            // Réinitialisation des champs du formulaire après update
            $this->resetForm();
        }
    }

    // Méthode pour réinitialiser les champs du formulaire
    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
    }
}
