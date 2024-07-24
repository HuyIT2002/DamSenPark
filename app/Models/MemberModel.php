<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'members_id';

    protected $fillable = [
        'title',
        'images_id',
        'categories_child_id',
    ];
    public $timestamps = true;

    public function image()
    {
        return $this->belongsTo(ImageModel::class, 'images_id');
    }

    public function categoryChild()
    {
        return $this->belongsTo(CategoryChild::class, 'categories_child_id');
    }
}
