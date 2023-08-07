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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('password')->nullable();
            $table->string('social_type')->nullable();
            $table->string('social_id')->nullable();
            $table->string('avatar')->nullable();  
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('occupation')->nullable();
            $table->string('community')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('house_number')->nullable();
            $table->string('status')->nullable();
            $table->string('bio')->nullable();
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
