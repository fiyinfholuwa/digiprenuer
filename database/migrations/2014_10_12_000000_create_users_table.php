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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('age');
            $table->string('gender');
            $table->string('profession');
            $table->string('referralCode');
            $table->string('country');
            $table->string('state');
            $table->string('username');
            $table->string('password');
            $table->string('accountNumber')->nullable();
            $table->string('accountName')->nullable();
            $table->string('bankName')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profileImage', 500);
            $table->string('activationCode')->nullable();
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};