<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeImageModel extends Model
{
    use HasFactory;
    protected $table = 'home_images';
    protected $fillable = ['image_path'];
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Categories::class, 'home_images_id');
    }
}
