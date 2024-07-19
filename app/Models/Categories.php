<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parent;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['stt', 'name', 'parent_id'];
    public $timestamps = false;
    public function parent()
    {
        return $this->belongsTo(Parent::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }
}
