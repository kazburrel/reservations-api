<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
    ];

    public function beds()
    {
        return $this->hasMany(Bed::class);
    }
}
