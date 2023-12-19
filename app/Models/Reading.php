<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Reading extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    protected $appends = ['image'];

    public function object()
    {
        return $this->belongsTo(AssetObject::class, 'object_id');
    }
    public function reading_type()
    {
        return $this->belongsTo(ReadingType::class, 'reading_type_id');
    }
    public function getImageAttribute()
    {
        return $this->hasMedia() ? $this->getFirstMediaUrl() : null;
    }
}
