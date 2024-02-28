<?php

namespace App\Http\Livewire;
use App\Models\TPSModels;

use Livewire\Component;

class MapLocationNew extends Component
{
     public $latitude = 0;
    public $longitude = 0;

    protected $listeners = ['updateLocation'];

    public function render()
    {
        return view('livewire.map-location-new');
    }

    public function updateLocation($location)
    {
        $this->latitude = $location['latitude'];
        $this->longitude = $location['longitude'];
    }
}
