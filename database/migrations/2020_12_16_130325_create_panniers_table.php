<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panniers', function (Blueprint $table) {
            $table->id();
            $table->integer('vente_id');
            $table->integer('post_id');
            $table->string('image');
            $table->ipAddress('user_ip');
            $table->integer('qty');
            $table->integer('montant');
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
        Schema::dropIfExists('panniers');
    }
}
