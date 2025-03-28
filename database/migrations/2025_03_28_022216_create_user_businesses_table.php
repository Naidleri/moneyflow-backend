<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('user_businesses', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->uuid('business_id');
            $table->enum('role', ['OWNER', 'MANAGER', 'EMPLOYEE']);
            $table->timestamps();

            $table->primary(['user_id', 'business_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_businesses');
    }
};
