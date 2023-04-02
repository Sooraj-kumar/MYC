<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MCEProfileModel extends Model
{
    use HasFactory;

    protected $table = 'mce_profile';
    protected $primaryKey = 'mce_profile_id';
    protected $fillable = [
        'user_id',
        'full_name',
        'designation_id',
        'city_id',
        'mce_profile_image',
        'about_me',
        'email',
        'mobile',
        'address',
        'department',
        'from_year',
        'location',
        'degree_id',
        'major',
        'institute',
        'completion_year',
        'review'    
    ];
}
