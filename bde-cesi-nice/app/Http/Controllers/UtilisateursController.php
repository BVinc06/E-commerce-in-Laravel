<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Repositories\UtilisateursRepository;

//use App\Http\Controllers\Controller;

class UtilisateursController extends Controller
{

    protected $UtilisateursRepository;
    protected $nbrPerPage = 10;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_utilisateur()
    {
        $utilisateur = $this->UtilisateursRepository->getPaginate($this->nbrPerPage);
        $links = $utilisateur->render();

        return view ('index', compact('utilisateur', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_utilisateur()
    {
        return view('signin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_utilisateur(Creation_Utilisateurs $request)
    {
        $utilisateur = $this->UtilisateursRepository->store($request->all());

        return redirect('utilisateur')->withok("L'utilisateur " . $utilisateur->lastname . " " . $utilisateur->firstname . " a été créé avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_utilisateur($id_utilisateur)
    {
        $utilisateur = $this->userRepository->getById($id_utilisateur);

        return view('liste_utilisateurs',  compact('utilisateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_utilisateur($id_utilisateur)
    {
        $utilisateur = $this->UtilisateursRepository->getById($id_utilisateur);

        return view ("home", compact('utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_utilisateur(Request $request, $id_utilisateur)
    {
        $this->UtilisateursRepository->update($id_utilisateur, $request->all());
        
        return redirect('utilisateur')->withOk("L'utilisateur " . $request->input('nom_utilisateur') . " " . input('prenom_utilisateur') . " a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_utilisateur($id_utilisateur)
    {
        $this->UtilisateursRepository->destroy($id_utilisateur);

        return back();
    }
}
