<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryLivewire extends Component
{
    public function render()
    {
        $categorias=Category::all();
        return view('livewire.category-livewire',compact('categorias'));
    }
}
