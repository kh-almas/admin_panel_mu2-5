<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskCategory_id',
        'user_id',
        'title',
        'description',
        'important',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function taskcategory()
    {
        return $this->belongsTo(Taskcategory::class);
    }
}
