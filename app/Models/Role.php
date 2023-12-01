<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    const ROLE_ADMINISTRATOR = '9abec43f-5917-46e6-a5f4-923a538ea12a';
    const ROLE_OWNER = '9abec43f-5f2b-49a5-b1c0-1387e7168ba9';
    const ROLE_USER = '9abec43f-5f78-4be7-9582-360a418c3420';

    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['name'];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
