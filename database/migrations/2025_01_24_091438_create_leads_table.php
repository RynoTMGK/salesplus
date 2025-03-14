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
        Schema::create('leads', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_number', length:13);
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('street_address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('province');
            $table->string('role', length:15)->default("lead");
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('status')->default("new");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
