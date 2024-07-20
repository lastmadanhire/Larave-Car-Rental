<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'vehicle_id', 'rate_id', 'start_date', 'end_date',
        'rental_period', 'status', 'starting_mileage', 'ending_mileage',
        'initial_payment', 'total_bill', 'balance_due'
    ];
}
