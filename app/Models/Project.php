<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $guarded = [];

    public function scopeSearch($query, $value)
    {
        $query->where("name", "like", "%{$value}%")
            ->orWhere("description", "like", "%{$value}%")
            ->orWhere("short_description", "like", "%{$value}%");
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function media()
    {
        return $this->hasMany(ProjectsMedia::class);
    }
}
