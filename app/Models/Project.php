<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'image_path',
        'github_url',
        'start_date',
        'end_date',
        'status',
        'category_id',
        'technologies'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
