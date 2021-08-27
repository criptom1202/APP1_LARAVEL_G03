<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Lista de Cargos</h1>
    </header>

    <main>
    
       
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CARGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>MANTENIMIENTO</th>
                </tr>
            </thead>

            <tbody>
            @foreach($cargo as $c)
                <tr>
                    <td>{{ $c->id }} </td>
                    <td>{{ $c->cargo }}</td>
                    <td>{{ $c->descripcion }}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        
        </table>
    
    
    
    </main>
    
   






</body>
</html>