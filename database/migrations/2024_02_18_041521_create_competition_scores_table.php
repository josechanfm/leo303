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
        Schema::create('competition_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->char('category',5);
            $table->string('title');
            $table->integer('first');
            $table->integer('second');
            $table->integer('third');
            $table->integer('fifth');
            $table->integer('seventh');
            $table->integer('advance');
            $table->integer('participate');
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
        Schema::dropIfExists('competition_scores');
    }
};
