<?php

namespace App\Http\Controllers;

use App\Utilisateurs;
use Illuminate\Http\Request;
use App\Http\Requests;


//use App\Http\Controllers\Controller;

class UtilisateursController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateurs::all();
        return view('home/Utilisateurs/utilisateurs')->withUtilisateurs($utilisateurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home/Utilisateurs/utilisateur_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur = new Utilisateurs;

        $utilisateur->nom_utilisateur = $request['nom_utilisateur'];
        $utilisateur->prenom_utilisateur = $request['prenom_utilisateur'];
        $utilisateur->email_utilisateur = $request['email_utilisateur'];
        $utilisateur->password_utilisateur = $request['password_utilisateur'];
        
        if(isset($request['d_bde_utilisateur'])){
            $utilisateur->d_bde_utilisateur = 1;
        } else {
            $utilisateur->d_bde_utilisateur = 0;
        }
        if(isset($request['d_salarie_utilisateur'])){
            $utilisateur->d_salarie_utilisateur = 1;
        } else {
            $utilisateur->d_salarie_utilisateur = 0;
        }
        if(isset($request['d_etudiant_utilisateur'])){
            $utilisateur->d_etudiant_utilisateur = 1;
        } else {
            $utilisateur->d_etudiant_utilisateur = 0;
        }

        $utilisateur->save();

        return view('home/Utilisateurs/utilisateur_edit')->withUtilisateur($utilisateur)->withUpdated('Utilisateur ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateur = Utilisateurs::find($id)->first();
        return view('home/Utilisateurs/utilisateur_show')->withUtilisateur($utilisateur);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilisateur = Utilisateurs::find($id)->first();
        return view('home/Utilisateurs/utilisateur_edit')->withUtilisateur($utilisateur);
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
        $utilisateur = Utilisateurs::find($id)->first();
        //On récupère les éléments des champs
        
        $utilisateur->nom_utilisateur = $request['nom_utilisateur'];
        $utilisateur->email_utilisateur = $request['email_utilisateur'];
        
        if(isset($request['d_bde_utilisateur'])){
            $utilisateur->d_bde_utilisateur = 1;
        } else {
            $utilisateur->d_bde_utilisateur = 0;
        }
        if(isset($request['d_salarie_utilisateur'])){
            $utilisateur->d_salarie_utilisateur = 1;
        } else {
            $utilisateur->d_salarie_utilisateur = 0;
        }
        if(isset($request['d_etudiant_utilisateur'])){
            $utilisateur->d_etudiant_utilisateur = 1;
        } else {
            $utilisateur->d_etudiant_utilisateur = 0;
        }

        $utilisateur->save();

        return view('home/Utilisateurs/utilisateur_edit')->withUtilisateur($utilisateur)->withUpdated('Utilisateur modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Utilisateurs::find($id)->first()->delete();
        $utilisateurs = Utilisateurs::all();
        return view('home/Utilisateurs/utilisateurs')->withDeleted('Utilisateur supprimé.')->withUtilisateurs($utilisateurs);
    }
}
