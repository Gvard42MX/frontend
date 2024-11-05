<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'project_id';  // Custom primary key
    protected $fillable = [
        'project_name', 
        'describe', 
        'start_date', 
        'end_date', 
        'status', 
        'created_ad', 
        'updated_ad', 
        'user_id'
    ];

    // Relationship: A project belongs to a pengguna (user)
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'user_id', 'user_id');
    }
}
?>