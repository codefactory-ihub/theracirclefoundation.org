<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportRequest extends Model
{
    use HasFactory;

    public $fillable = ['full_name', 'email', 'intention'];

    public function scopeSearch($query, $value)
    {
        $query->where("full_name", "like", "%{$value}%")
            ->orWhere("email", "like", "%{$value}%")
            ->orWhere("intention", "like", "%{$value}%");
    }
}
