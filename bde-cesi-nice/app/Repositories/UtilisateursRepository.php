<?php

namespace App\Repositories;

use App\Utilisateurs;

class utilisateursRepository
{

    protected $utilisateurs;

    public function __construct(Utilisateurs $utilisateurs)
	{
		$this->utilisateurs = $utilisateurs;
	}

	private function save(Utilisateurs $utilisateurs, Array $inputs)
	{
		$utilisateurs->firstname = $inputs['prenom_utilisateurs'];
		$utilisateurs->lastname = $inputs['nom_utilisateurs'];
		$utilisateurs->email = $inputs['email_utilisateurs'];
		$utilisateurs->campus = $inputs['campus_utilisateurs']	
		$utilisateurs->admin = $inputs['password_utilisateur'];
        $utilisateurs->admin = $inputs['d_etudiant_utilisateur'];
        $utilisateurs->admin = $inputs['d_bde_utilisateur'];
        $utilisateurs->admin = $inputs['d_salarie_utilisateur'];
		$utilisateurs->admin = isset($inputs['admin']);	
		
		$utilisateurs->save();
	}

	public function getPaginate($n)
	{
		return $this->Utilisateurs->paginate($n);
	}

	public function store(Array $inputs)
	{
		$utilisateurs = new $this->utilisateurs;		
		$utilisateurs->password = bcrypt($inputs['password']);

		$this->save($utilisateurs, $inputs);

		return $utilisateurs;
	}

	public function getById($id)
	{
		return $this->utilisateurs->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}