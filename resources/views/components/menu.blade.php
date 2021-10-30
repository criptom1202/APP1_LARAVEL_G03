<div {{ $attributes->merge(['class' => 'font-bold']) }}>
    <nav>
        <ul>
            <li class="pl-10 py-3 hover:bg-red-800 flex flex-row"><div class="px-5"><i class="fas fa-home"></i></div><a href="#">Inicio</a></li>
            <li class="pl-10 py-3 hover:bg-red-800 flex flex-row"><div class="px-5"><i class="fas fa-users"></i></div><a href="{{ route('cargo.index') }}">Cargos</a></li>
            <li class="pl-10 py-3 hover:bg-red-800 flex flex-row"><div class="px-5"><i class="fas fa-people-arrows"></i></div><a href="{{ route('empleados.index') }}">Empleados</a></li>
            <li class="pl-10 py-3 hover:bg-red-800 flex flex-row"><div class="px-5"><i class="fas fa-project-diagram"></i></div><a href="#">Proyectos</a></li>
        </ul>
    </nav>
</div>