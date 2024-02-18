<?php

// database/migrations/create_produits_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('photos')->nullable();
            $table->text('descriptive')->nullable();
            $table->decimal('prix', 10, 2);
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_societe')->nullable();
            // Add other columns as needed

            $table->timestamps();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_societe')->references('id')->on('societes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
