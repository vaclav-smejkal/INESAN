<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    use HasFactory;

    public $timsestamps = false;

    protected $fillable = [
        'user_id',
        'project_id',
        'role_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
