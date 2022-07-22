<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'cloth_id',
        'name',
        'description',
        'image_type',
    ];
}
