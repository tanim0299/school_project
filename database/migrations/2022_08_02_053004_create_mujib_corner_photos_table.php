<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMujibCornerPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mujib_corner_photos', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->longText('details')->nullable();
            $table->string('image',200)->nullable();
            $table->string('type',20);
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
        Schema::dropIfExists('mujib_corner_photos');
    }
}
