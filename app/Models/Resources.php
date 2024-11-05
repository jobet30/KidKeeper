<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_name',
        'type_of_resource',
        'location',
        'contact_information',
        'eligibility_requirements',
        'notes',
        'capacity',
        'operating_hours',
        'cost_of_service',
        'last_updated',
    ];
}
