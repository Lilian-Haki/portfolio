<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'user_id',
        'status',
        'start_date',
        'end_date'
    ];

    protected $appends = [
        'image_url'
    ];

    public function imageUrl(): Attribute {
        return Attribute::make(
            get: function() {
                return $this->image ? asset($this->image) : null;
            }
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'project_categories');
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'project_services');
    }
}
