<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class componentModel extends Model
{
    use HasFactory;

    protected $table = 'components';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description', 'price', 'type_id', 'specs', 'chipset_id', 'recommended'];
}
