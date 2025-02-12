<?php

namespace App\Livewire;

use Livewire\Component;

class CreateTeam extends Component
{

    public $search = '';
    public $minValue = 4;
    public $maxValue = 14;
    public $selectedRole = 'all';

    public function selectRole($role)
    {
        $this->selectedRole = $role;
    }


    public function render()
    {
        return view('livewire.create-team');
    }
}
