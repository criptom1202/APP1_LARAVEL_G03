<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Nuevo Cargo</title>
</head>
<body class="bg-gray-100">

    <header>
        
    </header>
    
    <main class="container mx-auto w-10/12">
    <h1 class="text-3xl font-bold py-10">Nuevo Cargo</h1>

    <div>
        <form action="{{ route('cargo.store') }}" method="POST">
            @csrf
            <label for="">Cargo:<br>
                <input type="text" name="cargo" placeholder="Ingrese Cargo" class="rounded py-1 pl-2 mt-2 mb-3 w-1/4"><br>
            </label>
            
            <label>Descripción:<br>
                <textarea name="descripcion" placeholder="Ingrese descripción" class="w-1/2 h-40 py-1 pl-2 mt-2 mb-3"></textarea><br>
            </label>
            <div class="flex w-1/2">
                <a href="{{ route('cargo.index') }}" class="rounded-full py-2 px-7 bg-gray-100 border-2 border-blue-900 hover:bg-yellow-800 hover:text-white mr-4 ">Atras</a>
                <button class="button-azul">Guardar</button>
            </div>
           
        </form>
    </div>
  
    
    </main>
</body>
</html>