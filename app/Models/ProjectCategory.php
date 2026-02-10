<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectCategory extends Model
{
     protected $fillable = [
        'project_id',
        'category_id'
     ];

     public function category(): BelongsTo
     {
        return $this->belongsTo(Category::class);
     }

     public function project(): BelongsTo
     {
        return $this->belongsTo(Project::class);
     }
     
}
