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
        Schema::create('chat_room_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_room_id')->unique()->constrained('chat_rooms')->onDelete('cascade');
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_room_users');
    }
};

