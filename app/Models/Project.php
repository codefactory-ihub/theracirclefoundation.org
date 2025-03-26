<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use MediaAlly;

    protected $table = "projects";
    protected $fillable = [
        'name',
        'project_key',
        'project_date',
        'short_description',
        'description',
        'creator_id',
        'archived',
    ];

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

    public function firstMedia()
    {
        return $this->hasOne(ProjectsMedia::class)->oldestOfMany();
    }

    public function firstImage()
    {
        return $this->hasOne(ProjectsMedia::class)
            ->where('media_type', 'like', 'image/%')
            ->oldestOfMany();
    }

}
