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
            <x-input wire:model="form.descripcion" label="descripcion "/>
        </div>
    </div>
    {{-- <div class="my-2 md:mr-2 md:mb-0 w-full">
        <div class="col-span-3">
            <x-input wire:model="form.edad" label="edad "/>
        </div>
    </div> --}}
    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input  wire:model="form.stock" label="stock"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.precio" label="precio"/>
    </div>

    <div class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input wire:model="form.talla" label="talla"/>
    </div>
    <div wire:submit.prevent="upload" class="my-2 md:mr-2 md:mb-0 w-full">
        <x-input type="file" wire:model="form.imagen" label="imagen"/>
    </div>



    <div class="grid sm:grid-cols-8 gap-2">
        <x-native-select label="Selecciona la categoria" wire:model="form.category_id">
            <option>Seleccione opción</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->nombre}}</option>
            @endforeach
        </x-native-select>
    </div>



    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal.card>


