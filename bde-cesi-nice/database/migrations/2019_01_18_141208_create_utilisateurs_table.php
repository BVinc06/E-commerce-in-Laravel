<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id_utilisateur');
            $table->string('nom_utilisateur');
            $table->string('prenom_utilisateur');
            $table->string('email_utilisateur');
            $table->enum('campus_utilisateur', ['Sophia Antipolis','Aix-en-provence','Montpellier','Toulouse','Pau','Bordeaux','Grenoble','Lyon','Dijon','La Rochelle','Angoulême','Orléans','Le Mans', 'Saint-Nazaire', 'Nantes', 'Brest', 'Caen', 'Rouen', 'Paris Nanterre', 'Reims', 'Arras', 'Lille', 'Nancy', 'Strasbourg']);
            $table->string('password_utilisateur');
            $table->boolean('d_etudiant_utilisateur');
            $table->boolean('d_bde_utilisateur');
            $table->boolean('d_salarie_utilisateur');

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
        Schema::dropIfExists('utilisateurs');
    }
}
