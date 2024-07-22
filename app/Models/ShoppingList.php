<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;
    protected $fillable = [
        'itemCart',
        'totalPrice',
        'fname',
        'lname',
        'email',
        'phone',
        'fax',
        'company',
        'address_1',
        'address_2',
        'state_city',
        'postal_zip',
        'country',
        'region',
    ];
}