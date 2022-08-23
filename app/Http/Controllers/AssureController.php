<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Assure;

class AssureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assures = Assure::all();

    return view('assure.index', compact('assures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('assure.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:150',
            'prenom' => 'required|max:150',
            'adresse' => 'required|max:100',
            'telephone' => 'required|max:50',
            'fonction' => 'required|max:50',
        ]);
    
        $assure = Assure::create($validatedData);
    
        return redirect('/assures')->with('success', 'Assuré ajouter avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assures = Assure::findOrFail($id);
        return view('assure.show', compact('assures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assure = Assure::findOrFail($id);

    return view('assure.edit', compact('assure'));
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
        $validatedData = $request->validate([
            'nom' => 'required|max:150',
            'prenom' => 'required|max:150',
            'adresse' => 'required|max:100',
            'telephone' => 'required|max:50',
            'fonction' => 'required|max:50',
        ]);
    
        Assure::whereId($id)->update($validatedData);
    
        return redirect('/assures')->with('success', 'Assuré mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assure = Assure::findOrFail($id);
        $assure->delete();
    
        return redirect('/assures')->with('success', 'Assuré supprimer avec succèss');
    }
}
