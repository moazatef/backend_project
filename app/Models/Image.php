<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}