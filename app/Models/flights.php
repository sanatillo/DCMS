<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;

    protected $fillable {
        'id',
        'created_ad',
        'updated',
    };

}
