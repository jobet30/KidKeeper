<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
class IncidentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident_date', 'description', 'incident_type', 'reporter_id', 
        'action_taken', 'status', 'location', 'severity_level', 
        'witness_info', 'date_reported', 'last_updated'
    ];

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id');
    }
}
