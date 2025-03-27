<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['rank_id', 'val'];

    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }
}
