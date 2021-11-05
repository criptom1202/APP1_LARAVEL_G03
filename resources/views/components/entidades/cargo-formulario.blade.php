@props(['caTituloFormulario', 'caNombreRuta', 'caRegistro' => null,  'caAccion']);

<x-formulario :cTituloFormulario="$caTituloFormulario" :cNombreRuta="$caNombreRuta" :cRegistro="$caRegistro">

    <x-slot name="sInputs">
        {{ $slot ?? null }}
        <label for="">Cargo:<br>
            <input type="text" name="cargo" placeholder="Ingrese cargo" value="{{ $caRegistro->cargo }}" class="inputs w-1/4">
        </label>
        <br>
        <label for="">Descripcion:<br>
            <textarea name="descripcion" placeholder="Ingrese descripción" class="inputs w-1/2 h-40">{{ $caRegistro->descripcion }}</textarea>
        </label>
        <br>
        <div class="flex w-1/2">
            <a href="{{ route('cargo.index') }}" class="rounded-full py-2 px-7 bg-gray-100 border-2 border-blue-900 hover:bg-yellow-800 hover:text-white mr-4 ">Atras</a>
            <button class="button-azul">{{ $caAccion }}</button>
        </div>    
    </x-slot>
   
  

</x-formulario>