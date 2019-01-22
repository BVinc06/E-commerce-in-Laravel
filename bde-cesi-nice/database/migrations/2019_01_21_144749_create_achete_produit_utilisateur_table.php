<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcheteProduitUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achete_produit_utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('produits_id')->foreign('produits_id')->references('id')->on('produits')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');

            $table->integer('utilisateurs_id')->foreign('utilisateurs_id')->references('id')->on('utilisateurs')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achete_produit_utilisateur', function(Blueprint $table) {
            $table->dropForeign('achete_produit_utilisateur_produits_id_foreign');
            $table->dropForeign('achete_produit_utilisateur_utilisateurs_id_foreign');
        });

        Schema::dropIfExists('achete_produit_utilisateur');
    }
}
