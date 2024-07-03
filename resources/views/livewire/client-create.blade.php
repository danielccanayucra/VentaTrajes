<x-modal.card title="Registro Administradores" blur wire:model.defer="isOpen">
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.nombre" label="Nombre completo"/>
        </div>
    </div>

    {{-- <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-native-select label="cargo" placeholder="Seleccione una opción"
            :options="['PRESIDENTE','SECRETARIO','TESORERO','VOCAL']"
            wire:model="form.position"
        />
    </div> --}}
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.apellido_paterno" label="apellido_paterno "/>
        </div>
    </div>
    {{-- <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.edad" label="edad "/>
        </div>
    </div> --}}
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input  wire:model="form.apellido_materno" label="apellido_materno"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.dni" label="dni"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.email" label="EMAIL"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.telefono" label="telefono"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.direccion" label="direccion"/>
    </div>
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.edad" label="edad"/>
    </div>



    {{-- <div class="grid sm:grid-cols-8 gap-2">
        <x-native-select label="Selecciona marca del auto" wire:model="form.car_id">
            <option>Seleccione opción</option>
            @foreach ($cars as $auto)
            <option value="{{$auto->id}}">{{$auto->marca}}</option>
            @endforeach
        </x-native-select>
    </div>
 --}}


    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>


