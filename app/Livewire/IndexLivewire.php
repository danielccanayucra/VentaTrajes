<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use App\Models\Suit;
use Livewire\Component;

class IndexLivewire extends Component{

    public function render(){
        $categorias=Category::all();
        $suits=Suit::paginate(6);
        return view('livewire.index-livewire',compact('categorias','suits'));
    }

}
