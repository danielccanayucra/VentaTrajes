<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientForm extends Form
{
    #[Rule('required')]
    public $nombre,$apellido_paterno,$apellido_materno,$dni,$email,$telefono,$direccion,$edad;
}
