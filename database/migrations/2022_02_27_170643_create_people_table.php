<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            // $table->id();
            // Crew
            $table->id();
            $table->movie_id()->require();
            $table->array('crew_list')->nullable();
            $table->string('director');


            // Cast
            $table->id();
            $table->movie_id()->require();
            $table->array('cast_list')->nullable();


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
        Schema::dropIfExists('people');
    }
};
