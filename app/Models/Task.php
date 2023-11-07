<?php

namespace App\Models;

use App\Models\Admin\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
