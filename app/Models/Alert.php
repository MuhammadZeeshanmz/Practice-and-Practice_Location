<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $table = "alerts";
    protected $fillable = [
        'title',
        'description',
        'model_id'
    ];
}
