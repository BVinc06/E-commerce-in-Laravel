<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{

    protected $table = 'utilisateurs';
    
    public $timestamps = false;

    public function propose_evenement()
	{
	    return $this->hasMany('App\Evenements');
	}

	public function vote_evenement()
	{
		return $this->belongsToMany('App\Evenements', 'vote_evenement_utilisateur');
	}

	public function participe_evenement()
	{
		return $this->belongsToMany('App\Evenements', 'participation_evenement_utilisateur');
	}

	public function produits()
	{
		return $this->belongsToMany('App\Produits', 'achete_produit_utilisateur');
	}

	public function photos()
	{
		return $this->belongsToMany('App\Photos' , 'like_photo_utilisateur');
	}

}
