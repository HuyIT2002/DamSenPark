<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'images_id';
    protected $fillable = [
        'id_display',
        'url',
        'title',
    ];
    public function image()
    {
        return $this->belongsTo(ImageModel::class, 'images_id');
    }
    public $timestamps = true;
}
