<main class="">
    <div class="grid mb-4 pb-10 px-8 mx-auto rounded-3xl bg-gray-100 border-4 border-green-400">
        <div class="grid grid-cols-12 gap-6">
            <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                <div class="col-span-12 mt-8">
                    <div class="flex items-center h-10 intro-y justify-between">
                        <h2 class="mr-5 text-lg font-medium flex justify-between">
                            {{ $categoria_name }}
                        </h2>
                        <a href="/dashboard" class="flex-auto ml-5 text-blue-900 w-10 h-5 text-xl">Volver</a>
                    </div>
                    <hr class="my-5">
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        @foreach ($suits_data as $suit)
                        <div class="transform hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                            <div class="p-5">
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-6 w-fit mx-auto">
                                            <img src="/public/{{ $producto->imagen }}" class="w-32" alt="profile picture">
                                        </div>
                                        <hr class="my-5">
                                        <div class="text-red-600 mt-1 text-3xl">${{ $suit->precio }}</div>
                                        <div class="text-center mt-1 font-bold text-2xl text-gray-600">{{ $suit->nombre }}</div>
                                        <div class="text-center mt-1 text-base text-gray-600">{{ $suit->descripcion }}</div>
                                        <button tabindex="0" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
