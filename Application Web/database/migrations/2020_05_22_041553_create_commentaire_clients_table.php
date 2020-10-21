<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_clients', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->integer('note');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('annonce_id')->constrained('annonces');
            $table->foreignId('user_id_client')->constrained('users');
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
        Schema::dropIfExists('commentaire_clients');
    }
}
