<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = [
        'title',
        'description',
        'banner_image',
        'large_image',
    ];
    public $timestamps = false;
}
