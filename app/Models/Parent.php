<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Parent extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $fillable = ['stt', 'name'];
    public $timestamps = false;
    public function categories()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }
}