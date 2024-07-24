<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryChild   extends Model
{
    use HasFactory;
    protected $table = 'categories_child';
    protected $primaryKey = 'categories_child_id';
    public $incrementing = true;

    protected $fillable = [
        'stt_category', 'name', 'parent_id', 'category_id'
    ];
    public $timestamps = false;

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'parent_id', 'parent_id');
    }

    // Mối quan hệ với bảng 'categories'
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
}