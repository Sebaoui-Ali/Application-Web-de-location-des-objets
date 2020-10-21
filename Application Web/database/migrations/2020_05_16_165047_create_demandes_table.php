<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->date('debut');
            $table->date('fin');
            $table->integer('status')->default(0);
            $table->foreignId('user_id_client')->constrained('users');
            $table->foreignId('user_id_partenaire')->constrained('users');
            $table->foreignId('annonce_id')->constrained('annonces');
            $table->text('description');
            $table->integer('etat')->default(1);
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
        Schema::dropIfExists('demandes');
    }
}
