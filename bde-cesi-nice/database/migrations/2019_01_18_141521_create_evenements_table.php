<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nom_evenement');
            $table->string('auteur_evenement');
            $table->dateTime('date_debut_evenement');
            $table->dateTime('date_fin_evenement');
            $table->string('lieu_evenement');
            $table->integer('duree_evenement');
            $table->float('prix_evenement', 8, 2);
            $table->boolean('payant_evenement');
            $table->string('description_evenement');
            $table->string('description_image_evenement');
            $table->boolean('recurrence_evenement');
            $table->boolean('idee_evenement');
            $table->integer('utilisateurs_id')->foreign('utilisateurs_id')
                  ->references('id')
                  ->on('utilisateurs')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('evenements', function(Blueprint $table) {
            $table->dropForeign('evenements_utilisateurs_id_foreign');
        });
        
        Schema::dropIfExists('evenements');
    }
}
