<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'price',
        'display',
        'contrast_ratio',
        'resolution',
        'brightness',
        'availability',
        'description',
        'specification',
        'ratio_screen',
        'throw_ratio_min',
        'throw_ratio_max',
        'link_lazada',
        'link_shopee',
        'other_links',
        'check_manu',
        'image',
        'price_sale',
        'status_sale',
        'status_sell',
        'product_code'
    ];
}