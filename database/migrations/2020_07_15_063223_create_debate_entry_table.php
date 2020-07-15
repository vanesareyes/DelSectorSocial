<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebateEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debate_entry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entry_id');
            $table->foreign('entry_id')
                    ->references('id')
                    ->on('entries');
            $table->unsignedBigInteger('debate_id');
            $table->foreign('debate_id')
                    ->references('id')
                    ->on('debates')
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
        Schema::dropIfExists('debate_entry');
    }
}
