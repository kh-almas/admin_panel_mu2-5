<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagelibrary extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'description',
        'size',
    ];

    public function person()
    {
        return $this->belongsTo(User::class,'person_id');
    }
}
