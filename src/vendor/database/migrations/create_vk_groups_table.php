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
        Schema::create('vk_groups', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('group_id')->comment('[Required] The group ID.');
            $table->string('confirmation')->comment("[Required] Group confirmation code.");
            $table->string('token')->comment("[Required] Group access token.");
            $table->string('secret_code')->default('')->comment("[Optional] Group secret code.");
            $table->boolean('need_secret_verify')->default(false)->comment("[Optional] Is need verify secret code in the requests.");
            $table->boolean('allow_retry_events')->default(true)->comment("[Optional] Is allow repeated events.");
            $table->string('callback_events_handler')->nullable()->comment("[Optional] Callback event handler.");
            $table->string('long_pool_events_handler')->nullable()->comment("[Optional] Long pool event handler.");

            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('vk_groups');
    }
};
