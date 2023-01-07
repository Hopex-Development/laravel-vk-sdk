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
        Schema::create('server_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Server::class, 'server_id');
            $table->string('type');
            $table->string('player');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('server_blocks');
    }
};
