<?php

declare(strict_types=1);

namespace App\Models;

use LaravelLang\Models\Casts\TrimCast;
use LaravelLang\Models\Eloquent\Translation;

class PostTranslation extends Translation
{
    protected $fillable = [
        'locale',
        'title',
        'body',
    ];

    protected $casts = [
        'title' => TrimCast::class,
        'body' => TrimCast::class,
    ];
}
