<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'seats', 'registration_number', 'vehicle_type_id',
        'vehicle_fuel_type_id', 'vehicle_gear_type_id', 'rate_id', 'model_id',
        'opening_mileage', 'condition_details', 'description', 'colour',
        'image_uri', 'status'
    ];
}
