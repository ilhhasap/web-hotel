<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function city() {
        return $this->belongsTo(City::class, 'id_city', 'id');
    }
}