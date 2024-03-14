<?php

// database/migrations/create_clients_table.php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('adresse')->nullable();
            $table->string('phone_number');
            $table->integer('etat')->default('0')->nullable();

            $table->enum('type', ['gerant', 'superviseur', 'employe'])->default('gerant')->nullable();
            $table->unsignedBigInteger('id_societe')->nullable();
            // Add other columns as needed

            $table->timestamps();

            // Foreign key relationship
            $table->foreign('id_societe')->references('id')->on('societes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

