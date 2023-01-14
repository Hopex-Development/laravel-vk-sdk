<?php

use Hopex\VkSdk\Models\Server;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('players_pagination', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conversation_message_id');
            $table->unsignedBigInteger('page_index');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('players_pagination');
    }
};
