<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model

    {
        protected $fillable = [
            'title',
            'description',
            'project_id',
            'due_date',
            'status'
        ];
    
        public function project()
        {
            return $this->belongsTo(Projects::class);
        }
    }

