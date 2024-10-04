<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Mostrar un listado de recursos.
     */
    public function index()
    {
        // Utilizar Paginacion
        $items = User::paginate(2);
        // Retorna vista con el parametro items sin la "$"
        return view('modules/users/index', compact('items'));
    }

    /**
     * Crear un nuevo recurso
     */
    public function create()
    {
        // Retorna una vista
        return view('modules/users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new User();
    //  Campo vacio   Valor del input que viene del form
        $item->name = $request->name;
    //  Guardar en BD
        $item->save();
    //  Redireccionar a 'index' una vez que se guardo
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
