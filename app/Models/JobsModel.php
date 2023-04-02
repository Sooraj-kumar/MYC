<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'job_title',
        'department',
        'job_category',
        'qualification',
        'required_skills',
        'experience',
        'location',
        'age_limit',
        'vacancies',
        'posted_on',
        'last_date',
        'advertisement',
        'status',
    ];
}
