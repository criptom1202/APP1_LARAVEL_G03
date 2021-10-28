<x-entidades.cargo-formulario caTituloFormulario="Editar Cargo" caNombreRuta="cargo.update" :caRegistro="$cargo" caAccion="Actualizar"> 
    @method('PUT')
    <label for="">Id:<br>
        <input type="text" name="cargo_id" class="inputs" value="{{ $cargo->id }}" readonly><br>
    </label>
</x-entidades.cargo-formulario>