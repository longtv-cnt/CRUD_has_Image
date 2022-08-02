<?php

namespace App\Models;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'post_id'];
    protected $table = 'images';
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
}
