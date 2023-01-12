<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_binusian');
            $table->rememberToken();
            $table->timestamps();
            $table->string('leader_name');
            $table->string('leader_WA_Number');
            $table->string('leader_Line_ID');
            $table->string('leader_Github_ID');
            $table->date('leader_Birth_date');
            $table->string('leader_Birth_place');
            $table->string('leader_cv');
            $table->string('leader_card');
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
};
