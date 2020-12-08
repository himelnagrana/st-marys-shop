<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'image_url',
        'price',
        'stock',
    ];

    protected $hidden = [
        'delete_flag',
    ];

    public $timestamps = true;
}
