<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengguna extends Authenticatable
{
    use HasFactory;

    // Custom primary key
    protected $primaryKey = 'user_id';

    // Reference the correct table
    protected $table = 'pengguna';

    // Enable timestamps (this is the default behavior, but it's good to declare explicitly)
    public $timestamps = true;

    // Relationship: A pengguna can have many projects
    public function projects()
    {
        return $this->hasMany(Project::class, 'user_id', 'user_id');
    }
}
