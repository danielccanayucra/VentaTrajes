<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller{
    use ApiResponser;

    public function index(){
        $Clients=Client::all();
        return $this->successResponse($Clients);
    }

    public function store(Request $request){
        $rules=[
            'nombre'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'required|max:255',
            'dni'=>'required|max:255',
            'telefono'=>'required|max:255',
            'direccion'=>'required|max:255',
            'edad'=>'required|max:255'

        ];
        $this->validate($request,$rules);
        $Clients=Client::create($request->all());
        return $this->successResponse($Clients,Response::HTTP_CREATED);
    }

    public function update(Request $request,$Clients){
        $rules=[
            'nombre'=>'required|max:255',
            'apellido_paterno'=>'required|max:255',
            'apellido_materno'=>'required|max:255',
            'dni'=>'required|max:255',
            'telefono'=>'required|max:255',
            'direccion'=>'required|max:255',
            'edad'=>'required|max:255'
        ];
        $this->validate($request,$rules);
        $Clients=Client::findOrFail($Clients);
        $Clients->fill($request->all());
        if($Clients->isClean()){
            return $this->errorResponse('Al menos un campo debe cambiar',Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $Clients->save();
        return $this->successResponse($Clients, Response::HTTP_CREATED);
    }

    public function show($Clients){
        $Clients=Client::findOrFail($Clients);
        return $this->successResponse($Clients);
    }

    public function destroy($Clients){
        $Clients=Client::findOrFail($Clients);
        $Clients->delete();
        return $this->successResponse($Clients);
    }

}

