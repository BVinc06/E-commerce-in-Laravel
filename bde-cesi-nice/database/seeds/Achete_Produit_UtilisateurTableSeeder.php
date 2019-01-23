<?php

use Illuminate\Database\Seeder;

class Achete_Produit_UtilisateurTableSeeder extends Seeder {

    public function run()
    {
		for($i = 1; $i <= 20; ++$i)
		{
			$numbers = range(1, 10);
			shuffle($numbers);
			$n = rand(3, 6);
			for($j = 1; $j < $n; ++$j)
			{
				DB::table('achete_produit_utilisateur')->insert(array(
					'produits_id' => $i,
					'utilisateurs_id' => $numbers[$j]
				));
			}
		}
	}
}