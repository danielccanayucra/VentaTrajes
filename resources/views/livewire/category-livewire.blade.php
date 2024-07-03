
<x-index-layout>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
        @foreach ($categorias as $categoria)
            @livewire(Categoria::class,['categoria'=>$categoria])
        @endforeach
    </div>
    <div class="mt-2">
       {{$categoria->links()}}
    </div>
</x-index-layout>

