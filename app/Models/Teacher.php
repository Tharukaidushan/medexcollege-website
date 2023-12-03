<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'surname',
        'first_name',
        'last_name',
        'email',
        'number',
        'image',
        'status',
        'qualification',
        'slug',
        'order_by',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
