<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('debut_reserv');
            $table->date('fin_reserv');
            $table->foreignId('annonce_id')->constrained('annonces');
            $table->integer('etat_reserv')->default(1);
            $table->foreignId('user_id_client')->constrained('users');
            $table->foreignId('user_id_partenaire')->constrained('users');
            $table->dateTime('annulation');
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
        Schema::dropIfExists('reservations');
    }
}
