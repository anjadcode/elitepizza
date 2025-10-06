<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialty',
        'experience_years',
        'photo_url',
        'bio'
    ];

    protected $casts = [
        'experience_years' => 'integer',
        'photo_url' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the classes for the instructor.
     */
    public function classes(): HasMany
    {
        return $this->hasMany(ClassModel::class, 'instructor_id');
    }

    /**
     * Get the active classes for the instructor.
     */
    public function activeClasses(): HasMany
    {
        return $this->classes()->available();
    }
}
