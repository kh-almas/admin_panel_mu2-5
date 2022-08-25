<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videonote extends Model
{
    use HasFactory;

    protected $fillable = [
        'videosID',
        'text',
    ];


    public function video()
    {
        return $this->belongsTo(Videolibrary::class,'videosID');
    }

    public function user()
    {
        return $this->belongsTo(user::class,'userID');
    }

}
