<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'family_name', 'address', 'contact_info', 'relationship_to_child', 
        'family_status', 'notes', 'num_children', 'family_income', 
        'family_composition', 'emergency_contact', 'last_updated'
    ];

    public function children()
    {
        return $this->hasMany(ChildCase::class);
    }
}
