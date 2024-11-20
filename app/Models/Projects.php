<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }
}
