<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $with = 'tag';

    protected $primaryKey = 'product_id';

    // protected $fillable = [
    //     'product_name',
    //     'product_image',
    //     'product_desc',
    //     'product_price',
    //     'tag_id'
    // ];

    protected $guarded = [];

    public function tag(){
        return $this->belongsTo(Tag::class,'tag_id');
    }
}




