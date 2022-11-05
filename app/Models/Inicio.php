<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'Titulo',
        'image',
        'content',
        'urlyoutube',
    ];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
