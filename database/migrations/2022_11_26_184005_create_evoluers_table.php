<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvoluersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evoluers', function (Blueprint $table) {
            $table->id();
            $table->date('dated');
            $table->date('datef');
            $table->integer('primeT');
            $table->foreignId('etudiant_id')->constrained('etudiants');
            $table->foreignId('entreprise_id')->constrained('entreprises');
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
        Schema::dropIfExists('evoluers');
    }
}
