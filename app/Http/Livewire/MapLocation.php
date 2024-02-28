<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TPSModels;

class MapLocation extends Component
{
    public $latitude = 0;
    public $longitude = 0;

    protected $listeners = ['updateLocation'];

    public function render()
    {
        return view('livewire.map-location');
    }

    public function updateLocation($location)
    {
        $this->latitude = $location['latitude'];
        $this->longitude = $location['longitude'];
    }
}
