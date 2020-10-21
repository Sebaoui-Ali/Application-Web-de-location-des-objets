<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('titre');
            $table->BigInteger('prix');
            $table->date('debut');
            $table->date('fin');
            $table->integer('caution');
            $table->date('date_fin_premium')->nullable(true);
            $table->string('Ville');
            $table->text('description');
            $table->string('etat_annonce');
            $table->foreignId('user_id')->constrained('users');
            $table->string('categorie');
            $table->SoftDeletes();
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
        Schema::dropIfExists('annonces');
    }
}
