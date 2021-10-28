<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <title>{{ $cTitulo ?? 'Inicio' }}</title>
</head>

<body class="bg-gray-100">
    <main>
        <div class="flex flex-row">
            <div class="bg-blue-900 pt-20 w-3/12"><x-menu class="text-white text-sm"/></div>
            <div class="w-10/12">
                <div class="contenedor font-bold border-b-2 border-fuchsia-600 py-5">User</div>
                {{ $sPrincipal ?? null}}

                <div class="py-5">
                    <p class="text-center text-sm">Todos los Derechos Reservados &copy; 2021</p>
                </div>
            </div>
        </div>
    </main>


</body>
</html>