<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('registration')->default(1);
            $table->boolean('maintenance')->default(0);
            $table->text('maintenance_link')->nullable();
            $table->boolean('permit_library')->default(1);
            $table->string('storage_limit');
            $table->boolean('user_approve')->default(1);
            $table->string('new_user_role')->default('user');
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
        Schema::dropIfExists('settings');
    }
}
