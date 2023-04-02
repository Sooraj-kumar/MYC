<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreesModel extends Model
{
    use HasFactory;

    protected $table = "degrees";
    protected $primaryKey = "degree_id";
    protected $fillable = [
        'degree_title',
        'status',
    ];
}
