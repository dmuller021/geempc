<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presets extends Model
{
    protected $table = 'presets';

    protected $primaryKey = 'id';

    protected $fillable = ['preset_name', 'build_id', 'level_id', 'status'];
}
