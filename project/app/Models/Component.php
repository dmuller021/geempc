<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['Name', 'Description', 'Price', 'Type_id', 'Specs', 'chipset_id', 'recommended'];
}
