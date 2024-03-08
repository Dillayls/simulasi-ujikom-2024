<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'category'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'category';

    public function books()
    {
        return $this->hasMany(Books::class, 'category_id');
    }
}
