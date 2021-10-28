<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    
    <title>Document</title>

</head>
<body>
    

     

    <main class="container w-10/12 mx-auto">
    
    <div class="flex flex-row justify-between py-10">
        <h1 class="text-4xl font-bold">Lista de Cargos</h1>
        <a href="{{ route('cargo.create') }}" class="button-azul">Nuevo</a>  
    </div>
    <div>
    
    
    </div>
    <table border="1" class="w-full">
            <thead>
                <tr>
                    <th class="px-4 py-3 bg-blue-900 text-white rounded-tl-lg">ID</th>
                    <th class="px-4 py-3 bg-blue-900 text-white">CARGO</th>
                    <th class="px-4 py-3 bg-blue-900 text-white">DESCRIPCIÓN</th>
                    <th class="px-4 py-3 bg-blue-900 text-white">ESTADO</th>
                    <th class="px-4 py-3 bg-blue-900 text-white" colspan=2>MANTENIMIENTO</th>
                    <th class="px-4 py-3 bg-blue-900 text-white  rounded-tr-lg"><a href="" class="px-4 py-2 rounded hover:bg-red-700"><i class="far fa-trash-alt"></i></a></th>
                </tr>
            </thead>

            <tbody class="divide-y-2 dividex-gray-200 divide-solid text-sm">
            @foreach($cargo as $c)
                <tr>
                    <td class="py-2">{{ $c->id }} </td>
                    <td class="py-2">{{ $c->cargo }}</td>
                    <td class="py-2">{{ $c->descripcion }}</td>
                    <td class="py-2 text-center">{{ $c->estado }}</td>
                    <td class="py-2"><a href="{{ route('cargo.show', $c->id)}}" class="px-2 text-yellow-500 text-xl hover:text-red-700"><i class="fas fa-info-circle"></i></a></td>
                    <td class="py-2"><a href="{{ route('cargo.edit', $c ) }}" class="bg-red-700 hover-red-900 text-white px-4 py-2 rounded font-bold"><i class="fas fa-edit"></i></a></td>
                    <!-- <td><form action="{{ route('cargo.destroy', $c ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Eliminar</button>
                    </form></td> -->
                    <td class="py-2 text-center"><input type="checkbox"></td>
                </tr>          
            @endforeach
            </tbody>
        </table>
    
    {{ $cargo->links() }}
    
    
    </main>
    
   

    


<script src="{{-- asset('js/app.js') --}}"></script>

</body>
</html>