<div class="py-5">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Clientes
        </h2>
    </x-slot>
    <div class=" mx-auto sm:px-6 lg:px-8">

        <div class="flex items-center justify-between dark:text-gray-400 gap-4 mb-2">
            <x-input icon="search" placeholder="Buscar registro" wire:model.live="search" />
            <x-button wire:click="create()" spinner="create" icon="plus" primary label="Nuevo"/>

                {{-- @if($isOpen)
                    @include('livewire.manager-create')
                @endif --}}
        </div>


        <!--Tabla lista de items   -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-indigo-500 text-white">
                <tr class="text-left text-xs font-bold  uppercase">
                  <td scope="col" class="px-6 py-3">ID</td>
                  <td scope="col" class="px-6 py-3">Nombre </td>
                  <td scope="col" class="px-6 py-3">apellido_paterno</td>
                  <td scope="col" class="px-6 py-3">apellido_materno</td>
                  <td scope="col" class="px-6 py-3">dni</td>
                  <td scope="col" class="px-6 py-3">email</td>
                  <td scope="col" class="px-6 py-3">telefono</td>
                  <td scope="col" class="px-6 py-3">direccion </td>
                  <td scope="col" class="px-6 py-3">edad</td>
                  <td scope="col" class="px-6 py-3 text-center">Opciones</td>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 dark:text-gray-400">
                @foreach($clientes as $item)
                <tr class="text-sm font-medium text-gray-900">
                  <td class="px-6 py-4">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-500 text-white">
                      {{$item->id}}
                    </span>
                  </td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->nombre}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->apellido_paterno}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->apellido_materno}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->dni}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->email}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->telefono}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->direccion}}</td>
                  <td class="px-6 py-4 dark:text-gray-400">{{$item->edad}}</td>
                  {{-- <td class="px-6 py-4 dark:text-gray-400">{{$item->categoria->nombre}}</td> --}}
                  <td class="px-6 py-4 text-right">
                    <x-button.circle wire:click="edit({{$item}})" primary icon="pencil" />
                    <x-button.circle negative icon="x" x-on:confirm="{
                    title: 'Seguro que deseas eliminar?',
                    icon: 'error',
                    method: 'destroy',
                    params: {{$item}}
                    }"
                    />


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        @if(!$clientes->count())
            No existe ningun registro conincidente
        @endif
        @if($clientes->hasPages())
        <div class="px-6 py-3">
            {{$clientes->links()}}
        </div>
        @endif

        </div>
      </div>


</div>
