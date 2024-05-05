<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzs', function (Blueprint $table) {
            $table->id();
            $table->string('desanimado');
            $table->string('ansioso');
            $table->string('dormir');
            $table->string('energia');
            $table->string('concentracion');
            $table->string('apetito');
            $table->string('irritable');
            $table->string('danio_asimismo');
            $table->string('ansiedad_generalizada');
            $table->string('panico');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzs');
    }
};
