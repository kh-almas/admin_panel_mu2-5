<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('taskcategory_id')->constrained();
            $table->unsignedBigInteger('user_id')->constrained();
            $table->string('title');
            $table->longText('description');
            $table->boolean('important')->default('0');
            $table->timestamps();
            //$table->foreign('taskcategory_id')->references('id')->on('taskcategorys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
