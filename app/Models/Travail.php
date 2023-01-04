<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travail extends Model
{
    use HasFactory;
    protected $table='travails';
    protected $fillable=[
        'name',
        'from_city',
        'to_city',
        'phone',
        'from_date',
        'email',
        'facebook',
        'instagram',
        'snap',
        'description',
    ];
}
