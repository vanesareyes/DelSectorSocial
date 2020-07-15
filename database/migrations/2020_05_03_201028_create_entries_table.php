<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')
                    ->references('id')
                    ->on('languages')
                    ->onDelete('cascade');
            // $table->unsignedBigInteger('author_id');
            // $table->foreign('author_id')
            //         ->references('id')
            //         ->on('users');
            $table->string('title', 50);
            $table->longText('definition');
            $table->text('recomendation');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')
                    ->references('id')
                    ->on('states');
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
        Schema::dropIfExists('entries');
    }
}
