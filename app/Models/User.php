<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'title_before_name',
        'title_after_name',
        'email',
        'gender',
        'higher',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //M:N USERTRAININGS
    public function trainings()
    {
        return $this->belongsToMany(Training::class);
    }

    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class);
    }

    public function realisedGrants()
    {
        return $this->hasMany(RealisedGrant::class);
    }

    //M:N UserProjectDocument
    public function projectDocuments()
    {
        return $this->belongsToMany(ProjectDocument::class);
    }
}
