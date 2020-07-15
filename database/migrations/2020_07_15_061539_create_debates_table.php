<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debates', function (Blueprint $table) {
            $table->id();
            $table->string('title',80);
            $table->longText('description');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')
                    ->references('id')
                    ->on('states');
            $table->timestamp('date'); //En Lucichart teníamos esto, LO DEJO, PERO CREO QUE LO DE ABAJO HACE CASI LO MISMO, (SI ES ASÍ, ELIMINAR EL QUE NO SE UTILICE)
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
        Schema::dropIfExists('debates');
    }
}
