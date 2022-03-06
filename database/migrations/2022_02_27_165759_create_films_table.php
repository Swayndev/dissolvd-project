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
        Schema::create('films', function (Blueprint $table) {
            $table->id()->require();
            $table->string('title')->unique();
            $table->year('release_year');
            $table->string('director');

            $table->tinytext('synopsis')->nullable();
            $table->tinytext('comment');
            $table->float('rating');

            $table->string('genre')->nullable();
            $table->array('cast');  # check what is the best data type for cast and for crew
            $table->array('crew');
            
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
        Schema::dropIfExists('films');
    }
};
