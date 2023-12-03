<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'category_id',
        'course_code',
        'mode',
        'title',
        'small_description',
        'long_description',
        'qualifications',
        'duration',
        'email',
        'contact_number',
        'slug',
        'order_by',
        'status',
        'teacher_id',
        'breadcrum_image',
        'main_image',
        'resouces',
        'embed_video',
        'course_duration',
        'lectures',
        'student_count',
        'languages',
        'price',
        'discount'
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'status' => 'boolean',
        'languages' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function syllabi()
    {
        return $this->hasMany(Syllabus::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function allInquiries()
    {
        return $this->hasMany(Inquiries::class);
    }
}
