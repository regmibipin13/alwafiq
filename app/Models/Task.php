<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['object_id', 'date'];

    public function object()
    {
        return $this->belongsTo(AssetObject::class, 'object_id');
    }
}
