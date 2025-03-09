<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mohs = Crud::all();
        return view("cruds.index", compact("mohs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cruds.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Crud::create([
            'name' => $request->name,
            'role' => $request->role,
            'DB' => $request->DB,
        ]);
        return redirect('cruds');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cruds = Crud::findOrFail($id);
        return view("cruds.edit", compact("cruds"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cruds = Crud::findOrFail($id);
        $cruds->update([
            'name' => $request->name,
            'role' => $request->role,
            'DB' => $request->DB,
        ]);
        return redirect('cruds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Crud::destroy($id);
        return redirect('cruds');
    }
}
