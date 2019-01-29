<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Evenements;

class BoxController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idees = Evenements::all()->where('idee_evenement', 0);
        return view('Idees/box')->withIdees($idees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('Idees/create_idea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ideas = new Evenements;

        $ideas->nom_evenement = $request['titre'];
        $ideas->auteur_evenement = $request['auteur'];
        $ideas->date_debut_evenement = $request['date_debut'];
        $ideas->date_fin_evenement = $request['date_fin'];
        $ideas->lieu_evenement = $request['lieu_evenement'];
        $ideas->prix_evenement = $request['prix'];
        $ideas->description_evenement = $request['description_evenement'];
        $ideas->idee_evenement = $request['idee_evenement'];

        

        $ideas->save();

        return view('Idees/create_idea')->withEvenements ($ideas)->withUpdated('Idée créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Doit retourner la vue pour modifier les champs si besoin sinon l'admin va directement valider l'idée.
        // TODO : Remplir les champs avec les données remplis par l'auteur de l'idée.
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
        //Va modifier l'évenement (donc l'idée) avec la requête envoyé par le formulaire de la vue retournée par edit().
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
