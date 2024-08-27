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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('address')->collation('utf8mb4_unicode_ci');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->foreignId('police_station_id')->constrained('police_stations')->onDelete('cascade');
            $table->foreignId('post_office_id')->constrained('post_codes')->onDelete('cascade');
            $table->integer('zip_code');
            $table->tinyInteger('type')->default(1)->comment('1=Permanent, 2=Present, 3=Office');
            $table->tinyInteger('status_active')->default(1)->comment('1=Active, 2=Inactive');
            $table->tinyInteger('is_deleted')->default(1)->comment('1=Not Deleted, 2=Deleted');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
