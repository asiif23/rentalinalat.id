<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];

    public function product()
    {
        $this-> hasMany(Product::class, ['id', 'name']);
    }

    public function parent()
    {
        $this->hasMany(Category::class, 'parent_id');
    }

    public function child()
    {
        $this->belongsTo(Category::class, 'parent_id');
    }
}