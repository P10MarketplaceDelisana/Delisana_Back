<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Intolerance;

class IntoleranceProduct extends Model
{
    use HasFactory;

    public function intolerances(){
        return $this->belongsToMany(Intolerance::class);
    }
}
