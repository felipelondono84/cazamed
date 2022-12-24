<div>
    <h1 class="text-2xl font-bold mb-4">ESTUDIANTES DEL  CURSO</h1>

    <x-table-responsive>
		<div class="px-6 py-4">
            <input wire:model="search" class="form-input w-full flex-1 shadow-sm" placeholder="Ingrese el nombre de un estudiante...">
        </div>

        @if ($students->count())
					<table class="w-full divide-gray-200">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nombre
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Email
								</th>
								
							</tr>
						</thead>
						<tbody>

                            @foreach ($students as $student)

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
                                           
                                                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $student->profile_photo_url }}" alt="" />    
                                            
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													{{ $student->name }}
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
									<div class="text-sm text-gray-900">{{ $student->email }}</div>
								</td>
                                
                                {{-- <td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="" class="text-indigo-600 hover:text-indigo-900">Ver</a>

                                    </td>
                                </td> --}}
								
							</tr>
							
                            @endforeach
						</tbody>
					</table>

                    <div class="px-6 py-4">
                        {{ $students->links() }}
                    </div>
        @else
         <div class="px-6 py-4">
            No hay ningun registro coincidente   
         </div>            
        @endif            
</x-table-responsive>
</div>
