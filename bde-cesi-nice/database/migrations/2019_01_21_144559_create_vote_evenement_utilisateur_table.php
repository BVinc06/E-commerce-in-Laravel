<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteEvenementUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_evenement_utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('evenements_id')->foreign('evenements_id')->references('id')->on('evenements')
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
        Schema::table('vote_evenement_utilisateur', function(Blueprint $table) {
            $table->dropForeign('vote_evenement_utilisateur_evenements_id_foreign');
            $table->dropForeign('vote_evenement_utilisateur_utilisateurs_id_foreign');
        });

        Schema::dropIfExists('vote_evenement_utilisateur');
    }
}
