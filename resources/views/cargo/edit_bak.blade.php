<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cargo</title>
</head>
<body>

    <header>
        <h1>Editar Cargo</h1>
    </header>
    
    <main>
        <form action="{{ route('cargo.update', $cargo ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="cargo" placeholder="Ingrese Cargo" value="{{ $cargo->cargo }}"><br>
            <textarea name="descripcion" placeholder="Ingrese descripción">{{ $cargo->descripcion }}</textarea><br>
            <button>Actualizar</button>
        </form>
    
    </main>
</body>
</html>