<div class="container py-8">
    <!-- component -->
<x-table-responsive>
		<div class="px-6 py-4 flex">
            <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso...">
        
            <a class="btn btn-danger ml-2" href="{{ route('instructor.courses.create') }}">Crear nuevo curso</a>
        </div>

        @if ($courses->count())
					<table class="w-full divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nombre
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Matriculados
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Calificacion
								</th>
								
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($courses as $course)

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
                                            @isset($course->image)
                                                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ Storage::url($course->image->url) }}" alt="" />      
                                            @else
                                                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ asset('img/home/peque.jpg') }}" alt="" />    
                                            @endisset
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													{{ $course->title }}
												</p>
											</div>
										</div>
								</td>
								{{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
                                        Categoria
										{{ $course->category->name }}
									</p>
								</td> --}}
								<td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $course->students->count() }}</div>
									<div class="text-sm text-gray-500">Alumnos matriculados</div>
								</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="text-sm text-gray-900 flex items-center">
										{{ $course->rating }}
                                        <ul class="flex text-sm ml-2">
                                            <li class="mr-1">
                                            <i class="fas fa-star text-{{ $course->rating >= 1? 'yellow' : 'gray' }}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{ $course->rating >= 2? 'yellow' : 'gray' }}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{ $course->rating >= 3? 'yellow' : 'gray' }}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{ $course->rating >= 4? 'yellow' : 'gray' }}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{ $course->rating == 5? 'yellow' : 'gray' }}-400"></i>
                                            </li>
                            
                                        </ul>
									</div>
                                    <div class="text-sm text-gray-500">Valoración del curso</div>
								</td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    @switch($course->status)
                                        @case(1)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                             Borrador
                                        </span>
                                            @break
                                        @case(2)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                
                                            Revisión</span>
                                        </span>
                                            @break
                                        @case(3)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                               Publicado</span>
                                            
                                            @break
                                        @default
                                    @endswitch    

									
								</td>
								
                                <td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('instructor.courses.edit', $course) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>

                                    </td>
                                </td>
								
							</tr>
							
                            @endforeach
						</tbody>
					</table>

                    <div class="px-6 py-4">
                        {{ $courses->links() }}
                    </div>
        @else
         <div class="px-6 py-4">
            No hay ningun registro coincidente   
         </div>            
        @endif            
</x-table-responsive>				
</div>
