<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuitController extends Controller
{
    use ApiResponser;

    public function index(){
        $suits=Suit::all();
        return $this->successResponse($suits);
    }

    public function store(Request $request){
        $rules=[
            'nombre'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'stock'=>'required|max:255',
            'precio'=>'required|max:255',
            'talla'=>'required|max:255',
            'imagen'=>'required|max:255'

        ];
        $this->validate($request,$rules);
        $suits=Suit::create($request->all());
        return $this->successResponse($suits,Response::HTTP_CREATED);
    }

    public function update(Request $request,$suits){
        $rules=[
            'nombre'=>'required|max:255',
            'descripcion'=>'required|max:255',
            'stock'=>'required|max:255',
            'precio'=>'required|max:255',
            'talla'=>'required|max:255',
            'imagen'=>'required|max:255'
        ];
        $this->validate($request,$rules);
        $suits=Suit::findOrFail($suits);
        $suits->fill($request->all());
        if($suits->isClean()){
            return $this->errorResponse('Al menos un campo debe cambiar',Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $suits->save();
        return $this->successResponse($suits, Response::HTTP_CREATED);
    }

    public function show($suits){
        $suits=Suit::findOrFail($suits);
        return $this->successResponse($suits);
    }

    public function destroy($suits){
        $suits=Suit::findOrFail($suits);
        $suits->delete();
        return $this->successResponse($suits);
    }

}


