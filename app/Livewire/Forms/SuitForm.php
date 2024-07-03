<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SuitForm extends Form
{
    #[Rule('required')]
    public $nombre,$descripcion,$stock,$precio,$talla,$imagen,$category_id;
}
