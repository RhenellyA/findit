<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalInfo extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'id_number',
        'contact_number',
    ];
}