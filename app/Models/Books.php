<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'tahun_terbit', 'deskripsi', 'gambar', 'stok', 'category_id'];

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $table = 'books';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'books_id');
    }

    public function colection()
    {
        return $this->hasMany(Colection::class, 'books_id');
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}