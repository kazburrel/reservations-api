<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    const ROLE_ADMINISTRATOR = '9abeda15-4078-4fc1-845d-c427b55f898a';
    const ROLE_OWNER = '9abeda15-424d-4059-b202-af34608dc8df';
    const ROLE_USER = '9abeda15-4290-4436-a3e2-b658c2586d4e';

    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['name'];


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
