<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('title', 255);
            $table->text('note');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('note_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
