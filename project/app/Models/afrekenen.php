<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afrekenen extends Model
{
    use HasFactory;

    protected $table = 'checkout';

    protected $guarded = [];
    protected $fillable = ['total_price' , 'email' , 'address' , 'house_number' ,  'components' , 'factuur'];


}
