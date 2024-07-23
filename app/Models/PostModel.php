<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'posts_id';
    protected $keyType = 'int';
    protected $fillable = [
        'plant_name', 'content', 'image_url', 'parent_id', 'categories_child_id'
    ];
    public $timestamps = true;

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'parent_id', 'parent_id');
    }

    public function categoriesChild()
    {
        return $this->belongsTo(CategoryChild::class, 'categories_child_id', 'categories_child_id');
    }
}
