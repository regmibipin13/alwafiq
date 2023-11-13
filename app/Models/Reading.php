<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function object()
    {
        return $this->belongsTo(AssetObject::class, 'object_id');
    }
    public function reading_type()
    {
        return $this->belongsTo(ReadingType::class, 'reading_type_id');
    }
}
