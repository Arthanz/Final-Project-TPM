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
        Schema::create('members', function (Blueprint $table) {
            $table->id('Member_ID');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('WA_Number');
            $table->string('Line_ID');
            $table->string('Github_ID');
            $table->date('Birth_date');
            $table->string('Birth_place');
            $table->string('cv');
            $table->string('card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
