<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->constrained('zones');
            $table->string('name')->collation('utf8mb4_unicode_ci');
            $table->string('slug')->collation('utf8mb4_unicode_ci');
            $table->string('bn_name')->collation('utf8mb4_unicode_ci');
            $table->string('code')->collation('utf8mb4_unicode_ci');
            $table->string('description')->collation('utf8mb4_unicode_ci');
            $table->boolean('status_active')->default(1);
            $table->boolean('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
