<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'events_name',
        'sticker_name',
        'content',
        'image_url',
        'show_time',
        'status',
    ];
    protected $primaryKey = 'events_id';
    public $timestamps = false;
}
