<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    /*$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
            $table->foreignId('updated_by')->nullable()->constrained('users')->onDelete('cascade');*/
    protected $fillable = [
        'user_id',
        'address',
        'country_id',
        'division_id',
        'district_id',
        'police_station_id',
        'post_office_id',
        'zip_code',
        'type',
        'status_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];
}
