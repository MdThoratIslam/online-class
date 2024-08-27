<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *array("val0"=>"65", "val1"=>"5", "val2"=>"Chapinawabganj", "val3"=>"চাপাইনবাবগঞ্জ", "val4"=>"22.718500", "val5"=>"89.070500", "val6"=>"NULL", "val7"=>"NULL", "val8"=>"1", "val9"=>"0", "val10"=>"2024-06-01 20:06:40", "val11"=>"2024-06-01 20:06:40")
     */
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table)
        {
            $table->id();
            $table->foreignId('division_id')->constrained('divisions');
            $table->string('name')->collation('utf8mb4_unicode_ci');
            $table->string('bn_name')->collation('utf8mb4_unicode_ci');
            $table->string('url')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('code')->nullable()->collation('utf8mb4_unicode_ci');
            $table->decimal('lat', 10, 8);
            $table->decimal('long', 11, 8);
            $table->tinyInteger('status_active')->default(1);
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
