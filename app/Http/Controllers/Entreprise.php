<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Entreprise extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $entreprise = entreprise::all();
return view('entreprise.index', compact('entreprise'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('entreprise.create');
        
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
            'nomE'=>'required',
            'description'=> 'required',
           
            ]);
            $entreprise = new entreprise([
            'nomE' => $request->get('nomE'),
            'description' => $request->get('description'),
           
            ]);
            $entreprise->save();
            return redirect('/')->with('success', 'entreprise Ajouté avec succès');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        $entreprise = entreprise::findOrFail($id);
return view('entreprise.show', compact('entreprise'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $entreprise = entreprise::findOrFail($id);
return view('entreprise.edit', compact('enttreprise'));


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
       

        $request->validate([
            'nomE'=>'required',
            'description'=> 'required',
           
            ]);
            $entreprise = entreprise::findOrFail($id);
            $entreprise->nomE = $request->get('nomE');
            $entreprise->description = $request->get('description');
           
            $entreprise->update();
            return redirect('/')->with('success', 'entreprise Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

        $entreprise = entreprise::findOrFail($id);
        $entreprise->delete();
        return redirect('/')->with('success', 'entreprise Supprime avec succès');

    }
}
