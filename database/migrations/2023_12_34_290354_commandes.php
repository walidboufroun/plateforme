<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/create_commandes_table.php
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->date('date_commande');
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_societe')->nullable();
            $table->unsignedBigInteger('id_produit');
            $table->integer('nombre_produit');
            $table->enum('statut', ['en_cours', 'livree', 'annulee'])->default('en_cours');
            $table->timestamps();
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_societe')->references('id')->on('societes')->onDelete('cascade');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
