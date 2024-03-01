<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intolerance extends Model
{
    use HasFactory;
    protected $fillable = [
        'intolerance',
    ];

    public function intolerance_product()

    {
        return $this->hasMany(intolerance_product::class, 'intolerance_id');
    } 



}
