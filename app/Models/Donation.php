<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for donation
class Donation extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'phone_number',
        'project_id',
        'amount',
        'notes',
        'payment_reference',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->where(function ($query) use ($value) {
            $query->where("name", "like", "%{$value}%")
                ->orWhere("email", "like", "%{$value}%")
                ->orWhere("phone_number", "like", "%{$value}%");
        })
        ->orWhereHas('project', function ($query) use ($value) {
            $query->where('name', 'like', '%' . $value . '%');
        });
    }
}
