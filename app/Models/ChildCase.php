<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class ChildCase extends Model
{
    use HasFactory, SoftDeletes;

    protected $tables = 'child_cases';

    protected $fillable = [
        'dob',
        'gender',
        'guardian_info',
        'case_number',
        'status',
        'risk_level',
        'date_opened',
        'date_closed',
        'notes',
        'ethnicity',
        'disability_status',
        'school_info',
        'special_needs',
        'last_updated',
        'social_worker_id',
    ];

    protected $casts = [
        'dob' => 'date',
        'date_opened' => 'date',
        'date_closed' => 'date',
        'last_updated' => 'timestamp',
        'special_needs' => 'array',
    ];

    public function socialWorker()
    {
        return $this->belongsTo(User::class, 'social_worker_id');
    }
}
