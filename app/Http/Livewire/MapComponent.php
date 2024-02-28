<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TPSModels;

class MapComponent extends Component
{
    public $locations;

    public function mount()
    {
        $this->locations = TPSModels::all();
    }

    public function render()
    {
        return view('livewire.map-component');
    }
}
