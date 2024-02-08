<?php

// database/migrations/create_commentaires_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_utilisateur');
            $table->text('content');
            $table->enum('statut', ['En attente', 'En cours de traitement', 'Traitement terminé avec succès', 'Traitement terminé avec problème', 'Non applicable'])->default('En attente'); // Assuming an integer for stars (1, 2, 3, 4, 5)
            // Add other columns as needed
          

            $table->timestamps();

            // Foreign key relationships
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_utilisateur')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
