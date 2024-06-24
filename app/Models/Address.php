<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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