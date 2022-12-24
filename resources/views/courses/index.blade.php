<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/1-40.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">

            <div class="w-full md:w-3/4 lg:w-1/2">

                <figure>
                    <img class="bg-cover lg:w-full object-cover" src="{{ asset('img/home/1-05.png')}}" alt="">
                    <img class="bg-cover lg:w-full object-cover" src="{{ asset('img/home/1-03.png')}}" alt="">
                </figure>
                {{-- <section class="bg-cover lg:w-full object-cover" style="background-image: url({{ asset('img/home/1-03.png')}})"></section> --}}
                {{-- <p class="text-black text-lg mt-2 mb-4">Medicina Interna y Habitos Saludables</p><br><br> --}}
                

                @livewire('search')
                
            </div>

        </div> 
     </section>

     @livewire('courses-index')
</x-app-layout>    