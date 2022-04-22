<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadreurs', function (Blueprint $table) {
            $table->id();
            // $table->Integer('nom');
            $table->String('nom');

            $table->String('prenom');
            $table->String('domaine');
            $table->String('contacts');
            $table->String('theme');
            $table->String('service');
            $table->String('type_encadreur');
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
        Schema::dropIfExists('encadreurs');
    }
}
