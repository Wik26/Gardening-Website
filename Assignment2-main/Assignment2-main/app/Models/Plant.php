<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plant extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // added getfile function to check if image exists

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
