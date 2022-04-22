<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->Integer('matricule');
            $table->String('nom');
            $table->String('prenom');
            $table->String('date_naissance');
            $table->String('filiere');
            $table->String('etablissement');
            $table->String('status');
            $table->Integer('id_session');
            $table->String('type_stagiaire');
            $table->Integer('id_encadreur');
            // $table->foreign('id_encadreur')
            //                 ->references('id')
            //                 ->on('encadreurs');
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
        Schema::dropIfExists('stagiaires');
    }
}
