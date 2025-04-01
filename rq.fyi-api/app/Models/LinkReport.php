<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LinkReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_id',
        'ip_address',
        'user_agent',
        'country',
        'port',
        'timestamp',
        'height',
        'width',
        'ram',
        'os',
        'cookies_enabled',
        'app_name',
        'app_version',
        'language',
    ];

    protected $casts = [
        'timestamp' => 'datetime',
    ];

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class);
    }
}
