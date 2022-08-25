<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'session',
        'device_name',
        'ip',
        'language',
        'device',
        'platform',
        'platform_version',
        'browser',
        'browser_version',
        'robot',
        'view_page_count',
        'user_agent',
    ];

    protected $hidden = [
        'device_name',
        'ip',
        'language',
        'device',
        'platform',
        'platform_version',
        'browser',
        'browser_version',
        'robot',
        'user_agent',
    ];

    protected $casts = [
        'ip' => 'encrypted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
