<?php

use Illuminate\Database\Seeder;

class Like_Photo_Utilisateur_TableSeeder extends Seeder {

    public function run()
    {
		for($i = 1; $i <= 20; ++$i)
		{
			$numbers = range(1, 10);
			shuffle($numbers);
			$n = rand(3, 6);
			for($j = 1; $j < $n; ++$j)
			{
				DB::table('like_photo_utilisateur')->insert(array(
					'photos_id' => $i,
					'utilisateurs_id' => $numbers[$j]
				));
			}
		}
	}
}