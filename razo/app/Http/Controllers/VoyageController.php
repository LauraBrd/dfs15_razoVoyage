<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();
        return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = new Voyage;
        $voyage->image = $request->image;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->prix = $request->prix;
        $voyage->titre = $request->titre;
        // pour enregistrer dans la bdd
        $voyage->save();
        /*if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }*/
        $voyages = Voyage::all();
        return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Int $id)
    {
        $voyage = Voyage::find($id);

        return view('admin.show', ['voyage' => $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage, Request $request)
    {
        return view('admin.edit', ['voyage' => $voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyages = Voyage::all();
        $voyage = Voyage::find(1);
        $voyage->image = $request->image;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->prix = $request->prix;
        $voyage->titre = $request->titre;
        $voyage->save();
        return view('admin.index', ['voyages' => $voyages]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voyage $voyage)
    {
        $voyage = Voyage::find($voyage);
        $voyage->delete();
        $voyages = Voyage::all();
        return view('admin.index', ['voyages' => $voyages]);
    }
}
