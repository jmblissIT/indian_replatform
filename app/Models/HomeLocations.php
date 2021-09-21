<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLocations extends Model
{
    use HasFactory;
        
        protected $table = 'home_locations';
        protected $fillable = ['location_name','slug','images'];
}
