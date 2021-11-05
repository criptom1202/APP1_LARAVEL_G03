@props(['caTituloFormulario', 'caNombreRuta', 'caRegistro' => null,  'caAccion']);

<x-formulario :cTituloFormulario="$caTituloFormulario" :cNombreRuta="$caNombreRuta" :cRegistro="$caRegistro">
    
    <x-slot name="sInputs">
        {{ $slot ?? null }}
        <label for="">Nombre:<br>
            <input type="text" name="nombre" placeholder="Ingrese nombre" value="{{ old('nombre') }}" class="inputs w-1/2">
        </label><br>
        <label for="">Apellido:<br>
            <input type="text" name="apellidos" placeholder="Ingrese apellidos" value="{{ old('apellidos') }}" class="inputs w-1/2">
        </label><br>
        <label for="">DNI:<br>
            <input type="text" name="dni" placeholder="Ingrese dni" value="{{ old('dni') }}" class="inputs w-1/4">
        </label><br>
        <label for="">Sexo:<br>
            <input type="radio" name="sexo" value="M">Masculino
            <input type="radio" name="sexo" value="F">Femenino
        </label>
        <br>
        <label for="">Fecha de Contrato:<br>
            <input type="date" name="fecha_cont" value="{{ date('Y-m-d') }}" class="inputs w-1/4">
        </label><br>
        
        <label for="">CARGO ID<br>    
            <input id="id_car" type="text" value="" name="cargo_id">
        </label><br>
        <br>
        
        <label for="">CARGO:<br>    
            <input id="cargo_dato" type="text" value="">
        </label> 
        <button id="btn_test" class="button-azul">Buscar Cargo</button>  
        <br>


        <label for="">Salario:<br>
            <input type="text" name="salario" placeholder="Ingrese cargo" value="{{ old('salario') }}" class="inputs w-1/4">
        </label>
        <br>

      




        <br>
        <div class="flex w-1/2">
            <a href="{{ route('empleados.index') }}" class="rounded-full py-2 px-7 bg-gray-100 border-2 border-blue-900 hover:bg-yellow-800 hover:text-white mr-4 ">Atras</a>
            <button class="button-azul">{{ $caAccion }}</button>
        </div>  

    <x-modal cTitulo="Cargos">
       
        <table border="1" class="w-full">
                    <thead>
                        <tr>
                            <th class="th-tabla rounded-tl-lg">#</th>
                            <th class="th-tabla">ID</th>
                            <th class="th-tabla">CARGO</th>
                            <th class="th-tabla">DESCRIPCIÓN</th>
                        </tr>
                    </thead>

                    <tbody id="tbody_empleado_cargo" class="divide-y-2 dividex-gray-200 divide-solid text-sm">
                      
                    </tbody>
                </table>
       <x-slot name="sFooter">
            <button id="btn_agregar" class="button-azul">Agregar</button>
            <button id="btn_cancelar" class="button-azul">Cancelar</button>
       </x-slot>
    </x-modal>


    </x-slot>
   

    

</x-formulario>