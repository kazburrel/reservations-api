<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = [
        'user_id',
        'invoice_address',
        'invoice_postcode',
        'invoice_city',
        'invoice_country_id',
        'gender',
        'birth_date',
        'nationality_country_id',
        'description'
    ];
}
