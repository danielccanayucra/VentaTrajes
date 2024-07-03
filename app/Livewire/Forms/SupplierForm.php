<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SupplierForm extends Form
{
    #[Rule('required')]
    public $nombre,$ruc,$telefono,$rubro;
}
