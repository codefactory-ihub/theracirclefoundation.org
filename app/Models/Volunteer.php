<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    public $fillable = ['fullName', 'emailAddress', 'age', 'phoneNumber', 'reason', 'accepted'];
    public function scopeSearch($query, $value)
    {
        if ($value == "ACCEPTED") {
            $query->where("accepted",  true);
            return;
        }
        if ($value == "PENDING") {
            $query->where("accepted",  null);
            return;
        }
        if ($value == "REJECTED") {
            $query->where("accepted",  false);
            return;
        }

        $query->where("fullName", "like", "%{$value}%")
            ->orWhere("phoneNumber", "like", "%{$value}%")
            ->orWhere("emailAddress", "like", "%{$value}%");
    }
}
