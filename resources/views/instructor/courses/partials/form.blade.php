<div class="mb-4">
    {!! Form::label('title', 'Titulo del curso:') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('title') ? ' border-red-600 ' : '')]) !!}

    @error('title')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror 
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug del curso:') !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly', 'class' => 'form-input block w-full mt-1' . ($errors->has('slug') ? ' border-red-600 ' : '')] ) !!}
    
    @error('slug')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror 
</div>

<div class="mb-4">
    {!! Form::label('subtitle', 'SubTitulo del curso:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600 ' : '')]) !!}

    @error('subtitle')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror 
</div>

<div class="mb-4">
    {!! Form::label('description', 'Descripcion del curso:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1' . ($errors->has('description') ? ' border-red-600 ' : '')]) !!}

    @error('description')
        <strong class="text-xs text-red-600">{{ $message }}</strong>
    @enderror 
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoria:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>
    <div>
        {!! Form::label('level_id', 'Niveles:') !!}
        {!! Form::select('level_id', $levels, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>
    <div>
        {!! Form::label('price_id', 'Precio:') !!}
        {!! Form::select('price_id', $prices, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>

<div class="grid md:grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
        <img id="picture" class="w-full h-64 object-cover object-center" src="{{ Storage::url($course->image->url) }}" alt="" />
           
    @else
        <img id="picture" class="w-full h-64 object-cover object-center" src="{{ asset('img/home/peque.jpg') }}" alt="" />    
    @endisset
        
    </figure>
    <div>
        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, officia eum. Blanditiis corporis minus quasi ad ex suscipit expedita atque nulla facilis eaque quaerat delectus dolore, perferendis autem placeat laborum!</p>
        {!! Form::file('file',['class' => 'form-input w-full'. ($errors->has('file') ? ' border-red-600 ' : ''), 'id' => 'file', 'accept' => 'image/*']) !!}
        @error('file')
            <strong class="text-xs text-red-600">{{ $message }}</strong>
        @enderror 
    </div>
</div>