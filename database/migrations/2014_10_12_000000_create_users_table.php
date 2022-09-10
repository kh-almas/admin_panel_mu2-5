<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uniqueId')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('provider_id')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_welcomed')->default(0);
            $table->boolean('approve')->default(0);
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('zip')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->text('cover_photo_path')->nullable();
            $table->string('used_storage_library')->nullable();
            $table->string('have_storage_library')->nullable();
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
        Schema::dropIfExists('users');
    }
}
