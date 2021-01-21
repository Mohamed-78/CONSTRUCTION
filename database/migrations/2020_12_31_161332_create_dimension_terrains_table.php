<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimensionTerrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_terrains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('prix');
            $table->string('dimension');
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
        Schema::dropIfExists('dimension_terrains');
    }
}
