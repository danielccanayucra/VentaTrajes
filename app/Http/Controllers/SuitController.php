<?php

namespace App\Http\Controllers;

use App\Models\Suit;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SuitController extends Controller
{
    use ApiResponser;

    public function index()
    {
        $suits = Suit::all();
        return $this->successResponse($suits);
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'stock' => 'required|max:255',
            'precio' => 'required|numeric',
            'talla' => 'required|max:255',
            'imagen' => 'nullable|image|max:1024'
        ];

        $this->validate($request, $rules);

        // Procesar la imagen si se adjunta en la solicitud
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenPath = $imagen->store('public/posts'); // Almacena la imagen en storage/app/public/posts
            $request->merge(['imagen' => $imagenPath]); // Agrega la ruta de la imagen al request
        }

        $suit = Suit::create($request->all());
        return $this->successResponse($suit, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'stock' => 'required|max:255',
            'precio' => 'required|numeric',
            'talla' => 'required|max:255',
            'imagen' => 'nullable|image|max:1024'
        ];

        $this->validate($request, $rules);

        $suit = Suit::findOrFail($id);

        // Procesar la imagen si se adjunta en la solicitud
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenPath = $imagen->store('public/posts'); // Almacena la imagen en storage/app/public/posts
            $suit->imagen = $imagenPath; // Agrega la ruta de la imagen al request
        }

        $suit->fill($request->all());

        if ($suit->isClean()) {
            return $this->errorResponse('Al menos un campo debe cambiar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $suit->save();
        return $this->successResponse($suit);
    }

    public function show($id)
    {
        $suit = Suit::findOrFail($id);
        return $this->successResponse($suit);
    }

    public function destroy($id)
    {
        $suit = Suit::findOrFail($id);
        $suit->delete();
        return $this->successResponse($suit);
    }
}
