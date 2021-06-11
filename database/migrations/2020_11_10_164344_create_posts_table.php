<?php
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('user_name');
            $table->string('user_lastname');
            $table->string('user_avatar');
           $table->integer('user_id');
            $table->string('marque');
            $table->string('EtatProduit');
            $table->string('adresse');
            $table->string('typeProduit');
            $table->string('duree');
            $table->integer('numSerie');
            $table->string('mail');
            $table->integer('phone');
            $table->integer('postal');
            $table->integer('montant');
            $table->string('region');
            $table->string('payment');
            $table->text('message');
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
        Schema::dropIfExists('posts');
    }
}
