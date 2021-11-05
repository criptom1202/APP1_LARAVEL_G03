<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Cargo;
use Illuminate\Support\Facades\DB;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        // $fecha = date_create('2021-12-12');
        
        // //$fecha_for = str_replace('-', '/', $fecha);
        // return date_format($fecha, "d/m/Y");
        
        //return  $fecha_for;
        //$empleados = Empleado::paginate(15);
        $empleados = DB::select('call sp_ver_empleados(?, ?)', [1, 15]);
        
        //return $empleados = DB::select('select nombre, apellidos from empleados')->paginate(15);

        // return $empleados = DB::table('empleados')
        // ->join('cargos', 'cargos.id', '=', 'empleados.cargo_id')
        // ->select('nombre as mi_nombres', 'apellidos', 'dni', 'sexo', 'fecha_cont', 'salario', 'cargo')
        // ->paginate(15);
        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = new Empleado();
        $cargos = Cargo::all();
        $datos = [
            'empleados' => $empleados,
            'cargos' => $cargos
        ];
        return view('empleado.create', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|max:50|unique:empleados,dni',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
