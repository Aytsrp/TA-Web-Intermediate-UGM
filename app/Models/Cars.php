<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'brand',
        'model',
        'year',
        'generation',
        'engine',
        'transmission',
        'bodytype',
        'fueltype',
        'drivewheel',
        'images'
    ];
}
