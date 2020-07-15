<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_entry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entry_id');
            $table->foreign('entry_id')
                    ->references('id')
                    ->on('entries')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                    ->references('id')
                    ->on('countries')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('country_entry');
    }
}
