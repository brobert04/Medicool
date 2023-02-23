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
        Schema::table('users', function (Blueprint $table) {
            $table->string('documents')->nullable();
            $table->string('role')->default('doctor')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('schedule')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('avatar')->nullable();   
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('documents');
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('schedule');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->dropColumn('avatar');
            $table->dropColumn('description');
        });
    }
};
