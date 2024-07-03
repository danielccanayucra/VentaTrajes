<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientMain extends Component
{
    public function render()
    {   $clientes=Client::paginate(30);
        return view('livewire.client-main',compact('clientes'));
    }
}
