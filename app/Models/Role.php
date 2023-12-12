<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    const ROLE_ADMINISTRATOR = '9ad49dd7-7832-43ab-9a75-36524fa78ffe';
    const ROLE_OWNER = '9ad49dd7-84bb-42c0-84fc-256bb7c485dc';
    const ROLE_USER = '9ad49dd7-8db1-405d-9167-bb2900d7ab23';

    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['name'];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
