<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListImageModel extends Model
{
    protected $table = 'list_images';
    protected $primaryKey = 'list_images_id ';
    protected $fillable = [
        'image_url',
        'title',
        'images_id',
    ];
    public function image()
    {
        return $this->belongsTo(ImageModel::class, 'images_id');
    }
    public $timestamps = true;
}
