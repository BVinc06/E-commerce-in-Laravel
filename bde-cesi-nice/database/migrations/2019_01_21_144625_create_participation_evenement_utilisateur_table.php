<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationEvenementUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_evenement_utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('moyen_paiement', ['CB','CASH','CHEQUE']);
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
        Schema::table('participation_evenement_utilisateur', function(Blueprint $table) {
            $table->dropForeign('participation_evenement_utilisateur_evenements_id_foreign');
            $table->dropForeign('participation_evenement_utilisateur_utilisateurs_id_foreign');
        });

        Schema::dropIfExists('participation_evenement_utilisateur');
    }
}
