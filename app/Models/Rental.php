<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable=([
        'user_id','location','image_one','image_two','image_three','rent_fee','status'
    ]);
}
