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
        $cruds = Crud::all();
        dd($cruds);
        return view("crud.index", compact("cruds"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.create");
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
        return redirect('crud');
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
        return view("crud.edit", compact("cruds"));
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
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Crud::destroy($id);
        return redirect('crud');
    }
}
