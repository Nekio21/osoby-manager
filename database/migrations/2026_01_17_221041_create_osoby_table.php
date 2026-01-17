<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('osoby', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('nazwisko');
            $table->date('data_urodzenia');
            $table->unsignedBigInteger('miejscowosc_id')->nullable();
            $table->unsignedBigInteger('firma_id')->nullable();
            $table->unsignedBigInteger('oddzial_firmy_id')->nullable();
            $table->timestamps();

            $table->foreign('miejscowosc_id')->references('id')->on('miejscowosci');
            $table->foreign('firma_id')->references('id')->on('firmy');
            $table->foreign('oddzial_firmy_id')->references('id')->on('oddzialy_firmy');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osoby');
    }
};
