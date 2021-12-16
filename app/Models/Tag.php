<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $primaryKey = 'tag_id';

    protected $guarded=['tag_id'];

    protected $fillable = [
        'tag_name'
    ];

    public function product(){
        return $this->hasMany(Product::class, 'tag_id');
        }
}
