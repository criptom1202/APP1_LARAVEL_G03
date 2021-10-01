<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    
    <title>Document</title>

</head>
<body>
    
    <header>
        <h1>Lista de Cargos</h1>
    </header>

    <main>
    
     <a href="{{ route('cargo.create') }}">Nuevo</a>  

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CARGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ESTADO</th>
                    <th colspan=3>MANTENIMIENTO</th>
                </tr>
            </thead>

            <tbody>
            @foreach($cargo as $c)
                <tr>
                    <td>{{ $c->id }} </td>
                    <td>{{ $c->cargo }}</td>
                    <td>{{ $c->descripcion }}</td>
                    <td>{{ $c->estado }}</td>
                    <td><a href="{{ route('cargo.show', $c->id)}}">Detalles</a></td>
                    <td><a href="{{ route('cargo.edit', $c ) }}">Editar</a></td>
                    <td><form action="{{ route('cargo.destroy', $c ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Eliminar</button>
                    </form></td>
                </tr>          
            @endforeach
            </tbody>
        
        </table>
    
    
    
    </main>
    
   




<script src="{{ asset('js/app.js')}}"></script>

</body>
</html>