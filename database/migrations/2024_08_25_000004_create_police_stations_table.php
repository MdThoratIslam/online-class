<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
*array("id" => "`id`", "district_id" => "`district_id`", "en_name" => "`en_name`", "bn_name" => "`bn_name`", "slug" => "`slug`",
* "lat" => "`lat`", "long" => "`long`", "url" => "`url`", "status_active" => "`status_active`", "is_delete" => "`is_delete`",
* "created_by" => "`created_by`", "updated_by" => "`updated_by`", "created_at" => "`created_at`", "updated_at" => "`updated_at`"), */

    public function up(): void
    {
        Schema::create('police_stations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->constrained('districts');
            $table->string('en_name')->collation('utf8mb4_unicode_ci');
            $table->string('bn_name')->collation('utf8mb4_unicode_ci');
            $table->string('slug')->collation('utf8mb4_unicode_ci');
            $table->string('url')->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('code')->nullable()->collation('utf8mb4_unicode_ci');
            $table->decimal('lat', 10, 8)->default(0);
            $table->decimal('long', 11, 8)->default(0);
            $table->tinyInteger('status_active')->default(1);
            $table->tinyInteger('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('police_stations');
    }
};
