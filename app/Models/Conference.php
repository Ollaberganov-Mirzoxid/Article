<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'photo1', 'description1', 'photo2', 'description2', 'photo3' , 'description3'];
}
