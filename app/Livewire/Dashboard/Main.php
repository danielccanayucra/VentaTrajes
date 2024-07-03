<?php

namespace App\Livewire\Dashboard;

use App\Models\Category;
use App\Models\Suit;
use Livewire\Component;

class Main extends Component
{

    public function render()
    {
        $categorias=Category::all();
        $suits=Suit::paginate(12);
        return view('livewire.dashboard.main', compact('categorias','suits'));
    }
}
