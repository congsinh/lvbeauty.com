<?php

namespace App\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    use HasFactory;
    protected $table = "wards";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'type',
        'district_id'
    ];

}
