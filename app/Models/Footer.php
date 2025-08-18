<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    // App\Models\Footer.php
    protected $fillable = [
        'number_one',
        'number_two',
        'short_description_one',
        'short_description_two',
        'address_one',
        'address_two',
        'address_three',
        'email',
        'facebook',
        'x',
        'instagram',
        'Copyright',
    ];
}
