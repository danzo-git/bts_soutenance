<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->Date('debut');
            $table->Date('fin');
            $table->String('libelle');
            // $table->Integer('stagiaire');
            
            // $table->foreign('stagiaire')
            // ->references('id_session')
            // ->on('stagiaire')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');


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
        Schema::dropIfExists('sessions');
    }
}
