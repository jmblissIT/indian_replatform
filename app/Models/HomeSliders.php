<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSliders extends Model
{
    use HasFactory;
    protected $table = 'home_sliders';
    protected $fillable = ['slide_title','page_slug','slide_content','images'];
}
