<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Syllabus extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'syllabus';

    protected $fillable = [
        'course_id',
        'topics',
        'sub_topics',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
        'topics' => 'array',
        'sub_topics' => 'array',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
