<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mst_drunkard extends Model
{
    use HasFactory;
    protected $table = 'mst_drunkards';

    protected $fillable = [
        'name',
        'level',
        'hp',
        'attack',
        'moce_speed'
    ];
}
