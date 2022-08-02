<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['author', 'title', 'body', 'cover',],
    $table='posts';
    public function image()
    {
        return $this->hasMany(Image::class, 'post_id', 'id');
    }
}
