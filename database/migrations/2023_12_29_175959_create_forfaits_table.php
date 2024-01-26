<?php

// database/migrations/create_forfaits_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForfaitsTable extends Migration
{
    public function up()
    {
        Schema::create('forfaits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_forfait');
            $table->string('duree_forfait');
            $table->text('description')->nullable();
            $table->string('photos')->nullable();
            $table->unsignedBigInteger('id_produit');
            // Add other columns as needed
            $table->timestamps();

            // Foreign key relationship
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forfaits');
    }
}

