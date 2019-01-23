<?php

namespace App\Repositories;

use App\Utilisateurs;

class utilisateursRepository
{

    protected $utilisateur;

    public function __construct(Utilisateurs $utilisateur)
	{
		$this->utilisateur = $utilisateur;
		var_dump($this->utilisateur);
	}

	private function save(Utilisateurs $utilisateur, Array $inputs)
	{
		$utilisateur->firstname = $inputs['prenom_utilisateur'];
		$utilisateur->lastname = $inputs['nom_utilisateur'];
		$utilisateur->email = $inputs['email_utilisateur'];
		$utilisateur->campus = $inputs['campus_utilisateur']	
		$utilisateur->admin = $inputs['password_utilisateur'];
        $utilisateur->admin = $inputs['d_etudiant_utilisateur'];
        $utilisateur->admin = $inputs['d_bde_utilisateur'];
        $utilisateur->admin = $inputs['d_salarie_utilisateur'];
		$utilisateur->admin = isset($inputs['admin']);	

		$utilisateurs->save();
	}

	public function getPaginate($n)
	{
		return $this->utilisateur->paginate($n);
	}

	public function store(Array $inputs)
	{
		$utilisateur = new $this->utilisateur;		
		$utilisateur->password = bcrypt($inputs['password_utilisateur']);

		$this->save($utilisateurs, $inputs);

		return $utilisateurs;
	}

	public function getById($id_utilisateur)
	{
		//Equivalent d'une requête SQL tu type select * from `Utilisateurs` where `id` = '...'
		return $this->utilisateurs->findOrFail($id_utilisateur);
	}

	public function update($id_utilisateur, Array $inputs)
	{
		$this->save($this->getById($id_utilisateur), $inputs);
	}

	public function destroy($id_utilisateur)
	{
		$this->getById($id_utilisateur)->delete();
	}

}