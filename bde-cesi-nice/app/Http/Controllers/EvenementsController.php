<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateurs;
use App\Evenements;
use Carbon\Carbon;
//use App\Http\Controllers\Controller;

class EvenementsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenements::all();
        return view('home/Evenements/evenements')->withEvenements($evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function export_users_registered($id)
    {
        $evenement = Evenements::findOrFail($id);
        if(!empty($evenement)){
            //On récupère la liste des utilisateurs inscrits
            $utilisateurs_inscrits =  Evenements::findOrFail($id)->participe_utilisateur;
            
            //Création du fichier CSV
            $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());

            //Remplissage
            $csv->insertOne('nom_evenement;nom_utilisateur;prenom_utilisateur');

            foreach ($utilisateurs_inscrits as $utilisateur) {
                $csv->insertOne($evenement->nom_evenement . ';' . $utilisateur->nom_utilisateur . ';' . $utilisateur->prenom_utilisateur);
            }
            //Return
            $csv->output('export_' . $evenement->nom_evenement . '_' . time() . '.csv');
        }
    }
}
