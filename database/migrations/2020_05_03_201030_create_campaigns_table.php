<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->string('link', 225);
            $table->unsignedBigInteger('entry_id');
            $table->foreign('entry_id')
                    ->references('id')
                    ->on('entries')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('campaigns');
    }
}
