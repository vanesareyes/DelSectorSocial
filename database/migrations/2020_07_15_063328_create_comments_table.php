<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('debate_id');
            $table->foreign('debate_id')
                    ->references('id')
                    ->on('debates')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            $table->text('text');
            $table->timestamp('date'); // LO DEJO, PERO CREO QUE LO DE ABAJO HACE CASI LO MISMO, (SI ES ASÍ, ELIMINAR EL QUE NO SE UTILICE)
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
        Schema::dropIfExists('comments');
    }
}
