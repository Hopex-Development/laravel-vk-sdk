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
        Schema::create('vk_users', function (Blueprint $table) {
            $table->id();

            /**
             * Silent token section.
             */
            $table->unsignedInteger('user_id')->comment('[Required] The user ID.');
            $table->string('first_name')->comment("[Required] User name.");
            $table->string('last_name')->comment("[Required] User surname.");
            $table->string('avatar')->comment("[Required] User avatar (200x200).");
            $table->string('phone')->nullable()->comment(
                "[Optional] The user's phone number. It always starts with the country code."
            );

            /**
             * Access token section.
             */
            $table->boolean('phone_validated')->default(false)->comment(
                '[Optional] The date of the last validation of the phone number.'
            );
            $table->boolean('additional_signup_required')->default(false)->comment(
                "[Optional] Additional registration is required."
            );
            $table->boolean('is_service')->nullable()->comment(
                '[Optional] Account type. Possible values: `true` — service (if there is only a VK ID account); `false` — full (VK profile is linked to the VK ID account).'
            );
            $table->string('email')->nullable()->comment("[Optional] The user's email address for notifications.");
            $table->unsignedInteger('source')->nullable()->comment(
                '[Optional] The reason code for calling exchangeSilentToken.'
            );
            $table->string('source_description')->nullable()->comment(
                '[Optional] Description of the reason for calling exchangeSilentToken.'
            );
            $table->string('access_token')->nullable()->comment("[Required] User's access token.");
            $table->unsignedInteger('access_token_id')->nullable()->comment(
                '[Required] The ID of the Access token. Used to revoke the token.'
            );
            $table->string('expires_in')->nullable()->comment('[Optional] Access token expiration time.');

            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('vk_users');
    }
};
