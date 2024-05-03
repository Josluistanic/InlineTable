<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\EnergyDrink;
use Livewire\Component;

class EnergyDrinksTable extends Component
{
    public $editedField = null;
    public $items = [];
    public $brands = [];

    public function mount()
    {
        $this->items = EnergyDrink::with('brand')->limit(5)->get()->toArray();
        $this->brands = Brand::all()->toArray();
    }

    public function render()
    {
        return view('livewire.energy-drinks-table', [
            'drinks' => $this->items,
        ]);
    }

    public function editField($index, $name)
    {
        $this->editedField = $index . '.' . $name;
    }

    public function save($index)
    {
        $item = $this->items[$index] ?? null;

        if (!is_null($item)) {
            optional(EnergyDrink::find($item['id']))->update($item);
        }

        // El optional evita código verboso como este:
        // if (!is_null($item)) {
        //     $energyDrink = EnergyDrink::find($item['id']);
        //     if (!is_null($energyDrink)) {
        //         $energyDrink->update($item);
        //     }
        // }

        $this->editedField = null;
    }
}
