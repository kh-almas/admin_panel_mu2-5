<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration',
        'maintenance',
        'permit_library',
        'storage_limit',
        'user_approve',
        'new_user_role',
        'maintenance_link',
    ];
}
