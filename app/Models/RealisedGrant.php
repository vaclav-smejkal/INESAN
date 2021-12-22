<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisedGrants extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'provider',
        'term',
        'costs',
        'support_amount',
        'costs_without_partners',
        'close',
        'user_id',
        'project_id',
        'role_id',
    ];

    public function users()
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
