<?php

namespace App\Models;

use App\Models\RoomType;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function type()
    {
        return $this->belongsTo(RoomType::class);
    }
}
