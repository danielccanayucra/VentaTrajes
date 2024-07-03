<?php

namespace App\Livewire;

use App\Livewire\Forms\SupplierForm;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SupplierMain extends Component{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    //public $automobile_id;
    public ?Supplier $supplier;
    public SupplierForm $form;
    public $search;


    public function render(){
        $suppliers=Supplier::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
        //$autos=Automobile::all();
        return view('livewire.supplier-main',compact('suppliers'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['supplier']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Supplier $supplier){
        //dd($vehicle);
        $this->supplier=$supplier;
        $this->form->fill($supplier);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->supplier->id)){
            Supplier::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->supplier->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Supplier $supplier){
        $supplier->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function reportePDF(){
        $suppliers =Supplier::all();
        $pdf = Pdf::loadView('reports.supplierpdf', compact('suppliers'));
        //return $pdf->download('Reporte de proveedor.pdf');
        return $pdf->stream();
    }
}

