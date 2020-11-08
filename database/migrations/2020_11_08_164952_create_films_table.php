<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50);
            $table->string("original_title", 50);
            $table->foreignId("producer_id")->constrained();
            $table->string("cover")->default("https://via.placeholder.com/200x300");
            $table->year("release");
            $table->boolean("color")->default(false);
            $table->smallInteger("running_time");
            $table->string("genre", 60);
            $table->text("plot");
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
}
