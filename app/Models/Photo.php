<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'category',
        'description',
        'user_id',
    ];

    public function getPhotoUrlAttribute() {
        return Storage::disk('public')->url($this->photo);
    }
}
