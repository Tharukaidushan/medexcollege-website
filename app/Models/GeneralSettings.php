<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralSettings extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'main_email',
        'number',
        'maintain_mode',
        'comming_soon',
        'facebook_link',
        'instagram_link',
        'youtube_link',
        'location',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'general_settings';

    protected $casts = [
        'maintain_mode' => 'boolean',
        'comming_soon' => 'boolean',
    ];
}
