<?php
namespace App\Livewire;
use App\Livewire\Forms\ClientForm;
use App\Models\Automobile;
use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ClientMain extends Component{
    use WithPagination;
    use Actions;
    public $isOpen=false;
    //public $automobile_id;
    public ?Client $client;
    public ClientForm $form;
    public $search;


    public function render(){
        $clientes=Client::where('nombre','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
        //$autos=Automobile::all();
        return view('livewire.client-main',compact('clientes'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['client']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Client $client){
        //dd($vehicle);
        $this->client=$client;
        $this->form->fill($client);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->client->id)){
            Client::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->client->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Client $client){
        $client->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
