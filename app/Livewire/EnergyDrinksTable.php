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

    public function rules()
    {
        return [
            'items.*.description' => 'required|string|min:3'
        ];
    }

    public function messages()
    {
        return [
            'items.*.description.required' => 'The description is missing.',
        ];
    }

    public function mount()
    {
        $this->items = EnergyDrink::with('brand')->limit(5)->get()->toArray();
        $this->brands = Brand::all()->toArray();
    }

    public function render()
    {
        return view('livewire.energy-drinks-table');
    }

    public function editField($index, $name)
    {
        $this->editedField = $index . '.' . $name;
    }

    public function save($index)
    {
        $this->validate();

        $item = $this->items[$index] ?? null;

        if (!is_null($item)) {
            optional(EnergyDrink::find($item['id']))->update($item);
        }

        // El optional reemplaza esto:
        // $energyDrink = EnergyDrink::find($item['id']);
        // if (!is_null($energyDrink)) {
        //     $energyDrink->update($item);
        // }

        $this->editedField = null;
    }
}
