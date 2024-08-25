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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->constrained('zones');
            $table->foreignId('country_id')->constrained('countries');
            $table->string('name')->collation('utf8mb4_unicode_ci');
            $table->string('bn_name')->collation('utf8mb4_unicode_ci');
            $table->string('slug')->unique()->collation('utf8mb4_unicode_ci');
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
