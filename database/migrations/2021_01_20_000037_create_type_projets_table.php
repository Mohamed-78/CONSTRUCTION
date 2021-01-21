<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_projets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('prix')->nullable();
            $table->string('type');
            $table->date('date_ajout');
            $table->string('photo');
            $table->string('photos')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('type_projets');
    }
}
