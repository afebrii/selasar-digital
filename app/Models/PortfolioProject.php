<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioProjectFactory> */
    protected $fillable = [
        'project_category_id',
        'title',
        'slug',
        'description',
        'image',
        'gallery',
        'tech_stack',
        'is_featured',
        'timeline',
        'challenge',
        'solution',
        'key_features',
        'efficiency_improvement',
        'system_uptime',
        'testimonial_quote',
        'testimonial_name',
        'testimonial_industry'
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'gallery' => 'array',
        'is_featured' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id');
    }
}
