<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    protected $table = 'evenements';
    
    public $timestamps = false;

    public function photos() 
	{
	    return $this->hasMany('App\Photos');
	}

	public function utilisateur_auteur() 
	{
		return $this->belongsTo('App\Utilisateurs', 'utilisateurs_id');
	}

	public function participe_utilisateur()
	{
		return $this->belongsToMany('App\Utilisateurs', 'participation_evenement_utilisateur');
	}
}
