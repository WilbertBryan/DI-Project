<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image_path',
        'short_description',
        'long_description',
        'register',
        'download',
        'website',
        'instagram',
        'whatsapp',
    ];
}
