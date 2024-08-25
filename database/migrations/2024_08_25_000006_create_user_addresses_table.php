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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('address');
            $table->string('country');
            $table->foreignId('division_id')->constrained()->onDelete('cascade');
            $table->foreignId('district_id')->constrained()->onDelete('cascade');
            $table->foreignId('police_station_id')->constrained()->onDelete('cascade');
            $table->foreignId('post_office_id')->constrained()->onDelete('cascade');
            $table->integer('zip_code');
            $table->tynyInteger('type')->default(1)->comment('1=Permanent, 2=Present, 3=Office');
            $table->tynyInteger('status_active')->default(1)->comment('1=Active, 2=Inactive');
            $table->tynyInteger('is_deleted')->default(1)->comment('1=Not Deleted, 2=Deleted');
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
