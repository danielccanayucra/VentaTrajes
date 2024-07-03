<?php

namespace App\Livewire;

use App\Livewire\Forms\SuitForm;
use App\Models\Category;
use App\Models\Suit;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SuitMain extends Component
{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    public $category_id;
    public ?Suit $suit;
    public SuitForm $form;
    public $search;


    public function render(){
        $suits=Suit::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
        $categories=Category::all();
        return view('livewire.suit-main',compact('suits','categories'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['suit']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Suit $suit){
        //dd($vehicle);
        $this->suit=$suit;
        $this->form->fill($suit);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->suit->id)){
            Suit::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->suit->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Suit $suit){
        $suit->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}

