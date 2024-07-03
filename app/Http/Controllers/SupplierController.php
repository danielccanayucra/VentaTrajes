<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupplierController extends Controller{
    use ApiResponser;

    public function index(){
        $suppliers=Supplier::all();
        return $this->successResponse($suppliers);
    }

    public function store(Request $request){
        $rules=[
            'nombre'=>'required|max:255',
            'ruc'=>'required|max:255',
            'telefono'=>'required|max:255',
            'rubro'=>'required|max:255'

        ];
        $this->validate($request,$rules);
        $suppliers=Supplier::create($request->all());
        return $this->successResponse($suppliers,Response::HTTP_CREATED);
    }

    public function update(Request $request,$suppliers){
        $rules=[
            'nombre'=>'required|max:255',
            'ruc'=>'required|max:255',
            'telefono'=>'required|max:255',
            'rubro'=>'required|max:255'
        ];
        $this->validate($request,$rules);
        $suppliers=Supplier::findOrFail($suppliers);
        $suppliers->fill($request->all());
        if($suppliers->isClean()){
            return $this->errorResponse('Al menos un campo debe cambiar',Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $suppliers->save();
        return $this->successResponse($suppliers, Response::HTTP_CREATED);
    }

    public function show($suppliers){
        $suppliers=Supplier::findOrFail($suppliers);
        return $this->successResponse($suppliers);
    }

    public function destroy($suppliers){
        $suppliers=Supplier::findOrFail($suppliers);
        $suppliers->delete();
        return $this->successResponse($suppliers);
    }

}


