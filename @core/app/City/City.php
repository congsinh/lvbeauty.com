<?php

namespace App\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'type',
        'slug'
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'city_id', 'id');
    }
}
