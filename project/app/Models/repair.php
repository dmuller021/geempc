<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class repair extends Model
{
    use HasFactory;
    protected $table = 'checkout';

    protected $guarded = [];
    protected $fillable = ['id' , 'created_at'];

}
