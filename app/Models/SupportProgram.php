<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_name',
        'description',
        'eligibility_criteria',
        'start_date',
        'end_date',
        'contact_information',
        'enrollment_status',
        'number_of_participants',
        'program_outcomes',
        'last_updated',
    ];
}
