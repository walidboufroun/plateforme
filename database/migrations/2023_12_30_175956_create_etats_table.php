<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtatsTable extends Migration
{
    public function up()
    {
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->string('etat_glass');
            $table->string('etat_plastic');
            $table->string('etat_metal');
            $table->string('etat_paper');
            $table->string('etat_other');
            $table->string('gps');
            $table->string('detecteur_de_feu');
            $table->string('detecteur_de_mouvement');
            $table->unsignedBigInteger('id_produit');
            // Add other columns as needed

            $table->timestamps();
            //$table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('etats');
    }
}
