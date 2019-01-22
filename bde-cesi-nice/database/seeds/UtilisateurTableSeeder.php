<?php

use Illuminate\Database\Seeder;

class UtilisateurTableSeeder extends Seeder {

    public function run()
	{
		DB::table('utilisateurs')->delete();

		for($i = 0; $i < 10; ++$i)
		{
			DB::table('utilisateurs')->insert([
				'nom_utilisateur' => 'Nom_utilisateur:' . $i,
				'prenom_utilisateur' => '¨Prenom_utilisateur:' . $i,
				'email_utilisateur' => 'email' . $i . '@gmail.com',
				'nom_utilisateur' => 'Nom_utilisateur:' . $i,
				'password_utilisateur' => bcrypt('password' . $i)
			]);
		}
	}
}