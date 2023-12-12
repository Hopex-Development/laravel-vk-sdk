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
        Schema::create('vk_applications', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('app_id')->comment('[Required] The application ID.');
            $table->string('secure_key')->comment("[Required] Application secure key.");
            $table->string('service_access_key')->comment("[Required] Application service access key.");
            $table->string('redirect_url')->comment(
                "[Required] The address to go to after authorization, which matches the trusted redirect from the application settings."
            );

            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('vk_sdk_users');
    }
};
