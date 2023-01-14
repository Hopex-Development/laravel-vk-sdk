<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('server_messages', function (Blueprint $table) {
            $table->id();
            $table->string('server');
            $table->string('sender');
            $table->string('text');
            $table->boolean('is_server_sending')->default(true);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('server_messages');
    }
};
