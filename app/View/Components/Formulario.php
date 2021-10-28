<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Formulario extends Component
{
    public $cTituloFormulario;
    public $cNombreRuta;
    public $cRegistro;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cTituloFormulario, $cNombreRuta, $cRegistro = null)
    {
        $this->cTituloFormulario = $cTituloFormulario;
        $this->cNombreRuta = $cNombreRuta;
        $this->cRegistro = $cRegistro;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario');
    }
}
