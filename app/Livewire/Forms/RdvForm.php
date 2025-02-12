<?php

namespace App\Livewire\Forms;

use App\Models\Rdv;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RdvForm extends Form
{
    public ?Rdv $rdv;

    public $client_id;
    public $service_id;
    public $date_rdv;
    public $status = 'en attente';

    public function store()
    {
      //  dd($this->all()); //all fait reference aux ariables declaré en haut 
        $this->validate([
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'date_rdv' => 'required|date',
            'status' => 'required|in:en attente,confirmé,annulé',
        ]);

        Rdv::create($this->only(['client_id', 'service_id', 'date_rdv','status']));

        session()->flash('success', 'Rendez-vous ajouté avec succès.');
        $this->reset();
    }

    public function setRdv(Rdv $rdv)
    {
        $this->rdv = $rdv;
        $this->client_id = $rdv->client_id;
        $this->service_id = $rdv->service_id;
        $this->date_rdv = $rdv->date_rdv;
        $this->status = $rdv->status;
    }

    public function update()
    {
        if ($this->rdv) {
            $this->validate([
                'client_id' => 'required|exists:clients,id',
                'service_id' => 'required|exists:services,id',
                'date_rdv' => 'required|date',
                'status' => 'required|in:en attente,confirmé,annulé',
            ]);

            $this->rdv->update([
                'client_id' => $this->client_id,
                'service_id' => $this->service_id,
                'date_rdv' => $this->date_rdv,
                'status' => $this->status,
            ]);

            session()->flash('success', 'Rendez-vous mis à jour.'); //pour le pop-up
        }
    }
}