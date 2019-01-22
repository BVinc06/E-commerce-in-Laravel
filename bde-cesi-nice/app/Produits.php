<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{

    protected $table = 'produits';
    
    public $timestamps = false;

    public function categorie() 
	{
		return $this->belongsTo('App\Categories', 'categories_id');
	}

	public function utilisateurs()
	{
		return $this->belongsToMany('App\Utilisateurs', 'achete_produit_utilisateur');
	} 

}
