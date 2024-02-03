<?php

// database/migrations/create_societes_table.php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration
{
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('site_web')->nullable();
            $table->string('adresse');
            $table->string('phone_number');
            $table->string('logo')->nullable();
            $table->enum('type_societe', ['SI', 'SARL', 'SPA', 'SNC', 'SCS']);
            $table->string('registre_commerce')->nullable();
            $table->text('description')->nullable();
            // Add other columns as needed

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('societes');
    }
}
