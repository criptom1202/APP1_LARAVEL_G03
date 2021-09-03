<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cargo</title>
</head>
<body>

    <header>
        <h1>Nuevo Cargo</h1>
    </header>
    
    <main>
        <form action="{{ route('cargo.store') }}" method="POST">
            @csrf
            <input type="text" name="cargo" placeholder="Ingrese Cargo"><br>
            <textarea name="descripcion" placeholder="Ingrese descripción"></textarea><br>
            <button>Guardar</button>
        </form>
    
    </main>
</body>
</html>