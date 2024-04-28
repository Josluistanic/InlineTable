<?php

namespace App\Livewire;

use App\Models\EnergyDrink;
use Livewire\Component;

class EnergyDrinksTable extends Component
{
    public function render()
    {
        return view('livewire.energy-drinks-table', [
            'drinks' => EnergyDrink::with('brand')->limit(5)->get(),
        ]);
    }
}
