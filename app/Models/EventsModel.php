<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    use HasFactory;

    protected $table = "events";
    protected $primaryKey = "id";
    protected $fillable = [
        'event_title',
        'feature_image',
        'event_date',
        'event_time',
        'event_address',
        'description',
        'status',
    ];
}
