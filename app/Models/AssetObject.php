<?php

namespace App\Models;

use App\Models\Admin\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetObject extends Model
{
    use HasFactory;
    protected $table = 'objects';

    protected $guarded = ['id'];

    public function rider()
    {
        return $this->belongsTo(Driver::class, 'rider_id');
    }

    public function area()
    {
        return $this->hasOne(Area::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function scopeFilters($query, $request)
    {
        if ($request->has('object_id') && $request->object_id !== null) {
            $query->where('object_id', $request->object_id);
        }
        if ($request->has('rider') && $request->rider !== null) {
            $query->where('rider', $request->rider);
        }
        if ($request->has('city') && $request->city !== null) {
            $query->where('city', $request->city);
        }
        if ($request->has('emirates') && $request->emirates !== null) {
            $query->where('emirates', $request->emirates);
        }
        return $query->orderBy('id', 'desc');
    }
}
