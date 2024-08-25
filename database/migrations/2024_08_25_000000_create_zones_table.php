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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name')->collation('utf8mb4_unicode_ci');
            $table->string('code')->collation('utf8mb4_unicode_ci');
            $table->string('description')->nullable()->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('status_active')->default(1);
            $table->tinyInteger('is_delete')->default(0);
            $table->string('bn_name')->nullable()->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
