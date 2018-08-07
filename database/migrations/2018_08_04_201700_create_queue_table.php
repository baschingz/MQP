<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('queueNum');
            $table->string('name', 100)->charset('utf8')->default(0);
            $table->unsignedInteger('beds');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->unsignedInteger('userId');

            $table->foreign('beds')
                  ->references('id')->on('beds')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue');
    }
}
