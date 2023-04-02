<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignationModel extends Model
{
    use HasFactory;

    protected $table = "designation";
    protected $primaryKey = "designation_id";
    protected $fillable = [
        'designation_title',
        'status',
    ];

}
