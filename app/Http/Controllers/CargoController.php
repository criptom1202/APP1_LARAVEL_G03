<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cargo = Cargo::paginate(10);
                return view('cargo.index', compact('cargo'));
    }
    public function index_json(){
        $cargo = Cargo::paginate(10);
        return $cargo; 
    }

    public function prueba_post(Request $request){
        return $request;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $cargo = new Cargo();

        return view('cargo.create', compact('cargo'));
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
        'cargo' => 'required|max:50|unique:cargos,cargo',
        'descripcion' => 'required|max:255'
    ]);

        // $cargo = new Cargo();
        // $cargo->cargo= "Admin";
        // $cargo->descripcion = "Desc de admin";
        // $cargo->estado = "Activo";
        // $cargo->save();

        // $cargo = Cargo::create([
        //     'cargo' => $request->cargo,
        //     'descripcion' => $request->descripcion,
        //     'estado' => $request->estado
        // ]);

        $cargo = Cargo::create($request->all());


        return redirect()->route('cargo.index');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::find($id);
        return $cargo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        
        //return $request;
        $cargo->update($request->all());

        // $cargo = Cargo::find($id);

        // $cargo->cargo = $request->cargo;
        // $cargo->descripcion = $request->descripcion;
        // $cargo->save();



        // Cargo::where('id', $id)
        // ->update([
        //     'cargo' => $request->cargo,
        //     'descripcion' => $request->descripcion
        // ]);




         return redirect()->route('cargo.index');
       //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        // $cargo = Cargo::find($id);
        // $cargo->delete();
        $cargo->delete();
        return redirect()->route('cargo.index');
    }
}
