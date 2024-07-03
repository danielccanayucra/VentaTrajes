<x-index-layout>
    <div style="    overflow: hidden; position: relative;" id="carouselExampleCaptions" class="container mx-auto " data-te-carousel-init data-te-ride="carousel">
        <!--Carousel indicators-->
        <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
          data-te-carousel-indicators>
          <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-label="Slide 2"></button>
          <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
            aria-label="Slide 3"></button>
        </div>

        <!--Carousel items-->
        <div style="height: 100vh;" class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
          <!--First item-->
          <div
            class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-active data-te-carousel-item style="backface-visibility : hidden ;height: 100%">
            <img src="images/publi.jpg" class="block w-full " height="100%"  alt="..." style="height: 100%; object-fit: cover;"/>
            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
              <h5 class="text-xl">First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <!--Second item-->
          <div
            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-item style="backface-visibility: hidden; height: 100%">
            <img src="images/cata.jpg" height="100%"  class="block w-full" alt="..." style="height: 100%; object-fit: cover;"/>
            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
              <h5 class="text-xl">Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <!--Third item-->
          <div
            class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-item style="backface-visibility: hidden; ">
            <img src="images/puno_saya.jpg" height="100%"  class="block w-full" alt="..." style="height: 100%; object-fit: cover;"/>
            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
              <h5 class="text-xl">Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>

        <!--Carousel controls - prev item-->
        <button
          class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
          type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
          <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </span>
          <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <!--Carousel controls - next item-->
        <button
          class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
          type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
          <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </span>
          <span
            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
      </div>


    <h2 class=" p-5 text-4xl font-medium truncate text-blue-700">Catalogo de productos</h2>
    <form action="/#productos_id">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">hola</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input name="buscar" type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Que desea buscar....." required>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
        </div>
      </form>
    <h2 id="categoria" class=" p-5 text-4xl font-medium truncate text-blue-700">Categorias</h2>
    <div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
                @foreach ($categorias as $categoria)
                    @livewire(Categoria::class,['categoria'=>$categoria])
                @endforeach
        </div>
    </div>
    <div class=" p-10" id="catalogo">
        <h2  class=" text-4xl font-medium truncate text-blue-700">Catalogo</h2>
    </div>

    <div  class="p-5 relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
                @foreach ($suits as $suit)
                <div class="relative flex flex-col text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
                      <img src="images/demo.jpg"
                        alt="card-image" class="object-cover w-full h-full" />
                    </div>
                    <div class="p-6">
                      <div class="flex items-center justify-between mb-2">
                        <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            {{$suit->nombre}}
                        </p>
                        <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            {{$suit->precio}}
                        </p>
                      </div>
                      <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                        {{$suit->descripcion}}
                      </p>
                    </div>

                  </div>

                @endforeach
        </div>
    </div>

    <footer class="footer footer-center bg-base-200 text-base-content rounded p-5 bg-gray-800">
        <nav class="text-white  grid-flow-col gap-4 p-5">
          <p class="link link-hover">Contactenos:</p>
          <p class="link link-hover">936782321 </p>
          <p class="link link-hover">957893212 </p>
          <p class="link link-hover">TiendaTrajes@gmail.com</p>
        </nav>
        <nav>
          <div class="grid grid-flow-col gap-4">
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class=" fill-current text-white">
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current text-white">
                <path
                  d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current text-white">
                <path
                  d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
              </svg>
            </a>
          </div>
        </nav>
        <aside>
          <p class="p-5 text-white">Encuentra la magia de nuestras tradiciones en cada traje.</p>
        </aside>
      </footer>


</x-index-layout>
