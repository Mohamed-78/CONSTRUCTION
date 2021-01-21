<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apparts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('prix');
            $table->string('lieu');
            $table->date('date_ajout');
            $table->string('photo');
            $table->string('photos')->nullable();
            $table->longText('description');
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
        Schema::dropIfExists('apparts');
    }
}
