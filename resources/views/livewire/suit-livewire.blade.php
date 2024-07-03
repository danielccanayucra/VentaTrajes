<x-index-layout>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
        @foreach ($suits as $suit)
            @livewire(Suit::class,['suit'=>$suit])
        @endforeach
    </div>
    <div class="mt-2">
       {{$suit->links()}}
    </div>
</x-index-layout>

