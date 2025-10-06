<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Avoid conflict with PHP class keyword

    protected $fillable = [
        'title',
        'type',
        'description',
        'date',
        'start_time',
        'duration',
        'max_students',
        'instructor_id',
        'price',
        'status'
    ];

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime',
        'duration' => 'integer',
        'max_students' => 'integer',
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the instructor for the class.
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    /**
     * Get the registrations for the class.
     */
    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class);
    }

    /**
     * Get the confirmed registrations for the class.
     */
    public function confirmedRegistrations(): HasMany
    {
        return $this->registrations()->confirmed();
    }

    /**
     * Scope a query to only include available classes.
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    /**
     * Scope a query to only include full classes.
     */
    public function scopeFull($query)
    {
        return $query->where('status', 'full');
    }

    /**
     * Scope a query to only include cancelled classes.
     */
    public function scopeCancelled($query)
    {
        return $query->where('status', 'cancelled');
    }

    /**
     * Scope a query to only include classes of a specific type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Check if the class is full.
     */
    public function isFull(): bool
    {
        return $this->confirmedRegistrations()->count() >= $this->max_students;
    }

    /**
     * Get available spots count.
     */
    public function availableSpots(): int
    {
        return $this->max_students - $this->confirmedRegistrations()->count();
    }

    /**
     * Format the date for display.
     */
    public function getFormattedDateAttribute(): string
    {
        return $this->date->format('F j, Y');
    }

    /**
     * Format the start time for display.
     */
    public function getFormattedStartTimeAttribute(): string
    {
        return $this->start_time->format('g:i A');
    }

    /**
     * Get the full class datetime string.
     */
    public function getFullDateTimeAttribute(): string
    {
        return $this->date->format('F j, Y') . ' at ' . $this->start_time->format('g:i A');
    }
}
