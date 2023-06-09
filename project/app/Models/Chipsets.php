<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chipsets extends Model
{
    protected $table = 'components_chipset';

    protected $primaryKey = 'id';

    protected $fillable = ['chipset'];
}
