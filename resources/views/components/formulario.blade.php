<x-layout>
    <x-slot name="sPrincipal">
        <div class="contenedor h-screen">
            <h1 class="titulo-form">{{ $cTituloFormulario }}</h1>
            <form action="{{ route( $cNombreRuta, $cRegistro ?? null ) }}" method="POST">
                @csrf
                {{ $sInputs }}
            </form>
        </div>      
    </x-slot>  
</x-layout>