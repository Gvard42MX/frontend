<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company'
    ];

    public function projects()
    {
        return $this->hasMany(Projects::class);
    }
}

