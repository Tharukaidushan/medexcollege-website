<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['mission', 'vission', 'about', 'short_about'];

    protected $searchableFields = ['*'];
}
