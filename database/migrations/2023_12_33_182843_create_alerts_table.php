<?php

// database/migrations/create_alerts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('date');
            $table->unsignedBigInteger('id_produit');
            $table->text('description');
            $table->boolean('seen')->default(false)->nullable();      
            $table->unsignedBigInteger('id_client');
            // Add other columns as needed
            $table->timestamps();
            // Foreign key relationships
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}
