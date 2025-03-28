<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rank extends Model
{
    /** @use HasFactory<\Database\Factories\RankFactory> */
    use HasFactory;

    protected $guarded = ['id'];
<<<<<<< HEAD
    protected $fillable = ['name', 'harga', 'image_url', 'diskon'];
=======
    protected $fillable = ['name', 'display', 'harga', 'image_url', 'diskon'];
>>>>>>> e5e58a5 (Frontend project)
    protected $appends = ['final_price', 'features'];

    public function feature(): HasMany
    {
        return $this->hasMany(Feature::class);
    }

    // public function collection()
    // {
    //     return $this->feature()->collect();
    // }

    public function getNameAttribute($value)
    {
        return Str::upper($value);
    }

    public function getFeaturesAttribute()
    {
        return $this->hasMany(Feature::class)->pluck('val');
    }

    public function getFinalPriceAttribute()
    {
        if (!$this->diskon == null)
        {
            return ($this->harga - (($this->harga) * ($this->diskon/100)));
        }

        return $this->harga;
    }
}
