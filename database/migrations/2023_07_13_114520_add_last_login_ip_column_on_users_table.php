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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_login_ip')->nullable();
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('birth_place');
            $table->dropColumn('occupation');
            $table->dropColumn('community');
            $table->dropColumn('district');
            $table->dropColumn('region');
            $table->dropColumn('house_number');
            $table->dropColumn('status');
            $table->dropColumn('bio');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_login_ip');
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
        });
    }
};
