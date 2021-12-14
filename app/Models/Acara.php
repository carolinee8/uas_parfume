<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $primaryKey = 'acara_id';

    protected $fillable = [
        'acara_title',
        'acara_excerpt',
        'acara_desc',
        'acara_image'
    ];
}
