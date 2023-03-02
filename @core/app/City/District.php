<?php

namespace App\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = "districts";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'type',
        'city_id',
    ];

    public function wards()
    {
        return $this->hasMany(Wards::class, 'district_id', 'id');
    }
}
