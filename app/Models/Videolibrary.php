<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videolibrary extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'thumbnail',
        'description',
        'size',
        'name',
    ];

    public function person()
    {
        return $this->belongsTo(User::class, 'person_id');
    }

    public function notes()
    {
        return $this->hasMany(Videonote::class,'videosID');
    }
}
