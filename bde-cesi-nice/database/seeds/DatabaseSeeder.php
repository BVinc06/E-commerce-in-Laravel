<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	$this->call(UtilisateurTableSeeder::class);
    	$this->call(EvenementsTableSeeder::class);
    	$this->call(CategoriesTableSeeder::class);
        $this->call(ProduitsTableSeeder::class);
    	$this->call(CommentairesTableSeeder::class);
    	$this->call(PhotosTableSeeder::class);
        $this->call(Vote_Evenement_UtilisateurTableSeeder::class);
        $this->call(Participation_Evenement_UtilisateurTableSeeder::class);
        $this->call(Achete_Produit_UtilisateurTableSeeder::class);
        //$this->call(Like_Photo_UtilisateurTableSeeder::class);
        
    }
}
