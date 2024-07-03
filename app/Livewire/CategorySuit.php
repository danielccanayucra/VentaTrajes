<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Suit;

class CategorySuit extends Component
{
    public $categoria_name;
    public $suits_data=[];

    public function mount($categoria_name)
    {
        $this->categoria_name = $categoria_name;
        $this->suits_data = Suit::where('categoria', $categoria_name)->get();
    }

    public function render()
    {
        return view('livewire.category-suit',);
    }
}
