<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inquiries extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'course_id',
        'email',
        'subject',
        'description',
        'status',
    ];

    protected $searchableFields = ['*'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
