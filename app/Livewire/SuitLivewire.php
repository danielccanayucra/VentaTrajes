<?php

namespace App\Livewire;

use App\Models\Suit;
use Livewire\Component;

class SuitLivewire extends Component
{
    public function render()
    {   $suits=Suit::paginate(6);
        return view('livewire.suit-livewire',compact('suits'));
    }
}
