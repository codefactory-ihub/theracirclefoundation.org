<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsMedia extends Model
{
    use HasFactory;
    protected $table = "projects_media";
    protected $fillable = [
        'media_key',
        'source',
        'media_type',
        'public_url',
        'public_id',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
