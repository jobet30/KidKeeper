<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_name',
        'type_of_service',
        'contact_information',
        'availability',
        'service_description',
        'notes',
        'provider_rating',
        'service_area',
        'last_updated',
    ];
}
