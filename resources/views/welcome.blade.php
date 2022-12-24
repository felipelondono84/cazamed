<x-app-layout>
    
    <section class="bg-cover lg:w-full object-cover" style="background-image: url({{ asset('img/home/1-40.png')}})">
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
    <section>
        {{-- <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1> --}}

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/contenido/2-10.png') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Somos</h1>
                    {{-- <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adip</p> --}}
                </header>
            </article>
            <article>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/contenido/2-11.png') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                    {{-- <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adip</p> --}}
                </header>
            </article>
            <article>
                <figure>
                    <a href="{{route('courses.index') }}"><img class="w-full object-cover" src="{{ asset('img/home/contenido/2-12.png') }}" alt=""></a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos</h1>
                    {{-- <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adip</p> --}}
                </header>
            </article>
            <article>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/contenido/2-13.png') }}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Servicios</h1>
                    {{-- <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adip</p> --}}
                </header>
            </article>
        </div>
    </section>
    <section>
        <article>
            <figure>
                <img class="w-full object-cover" src="{{ asset('img/home/aprender/3-41.png') }}" alt="">
                {{-- <img src="{{ asset('img/home/aprender/3-42.png') }}" alt=""> --}}
            </figure>
            
            
        </article>
        
     </section>
    <section class="bg-cover lg:w-full object-cover mt-8" style="background-image: url({{ asset('img/home/regalate/4-38.png') }})"><br><br><br><br><br><br>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article>
                    <figure>
                        <img class="w-full object-cover" src="{{ asset('img/home/regalate/4-25.png') }}" alt="">
                    </figure>
                    
                </article>
                <article>
                    <figure>
                        <img class="w-full object-cover" src="{{ asset('img/home/regalate/4-22.png') }}" alt="">
                    </figure>
                    
                </article>
                <article>
                    <figure>
                        <img class="w-full object-cover" src="{{ asset('img/home/regalate/4-23.png') }}" alt="">
                    </figure>
                    
                </article>
                <article>
                    <figure>
                        <img class="h-36 w-full object-cover" src="{{ asset('img/home/regalate/4-24.png') }}" alt="">
                    </figure>
                    
                </article>
                {{-- <article>
                    <figure>
                        <img class="w-full object-cover" src="{{ asset('img/home/regalate/4-25.png') }}" alt="">
                    </figure>
                    
                </article> --}}
        </div>     
    </section>
    <section class="bg-cover lg:w-full object-cover" style="background-image: url({{ asset('img/home/pie/5-37.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <div>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/pie/5-30.png') }}" alt="">
                </figure>
                
                
            </div>
            {{-- <div>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/pie/5-31.png') }}" alt="">
                </figure>
                
                
            </div>
            <div>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/pie/5-32.png') }}" alt="">
                </figure>
                
                
            </div>
            <div>
                <figure>
                    <img class="w-full object-cover" src="{{ asset('img/home/pie/5-33.png') }}" alt="">
                </figure>
                
                
            </div> --}}
        </div>    
    </section>

    {{-- <section class="mt-24">
        <h1 class="text-center text-3xl text-gray-600">Ultimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Encuentra los ultimos cursos en nuestra plataforma</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>

    </section> --}}
    
</x-app-layout>


