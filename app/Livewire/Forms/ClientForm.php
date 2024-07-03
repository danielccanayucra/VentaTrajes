<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ClientForm extends Form
{
    #[Rule('required')]
    public $nombre,$apellido,$edad,$direccion,$telefono,$email,$ciudad,$cars_id;
}
