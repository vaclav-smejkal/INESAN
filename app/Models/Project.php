<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'project_number',
        'name',
        'shortcut',
        'region',
        'year',
        'time',
        'from',
        'to',
        'type',
        'cost',
        'own_sources',
        'support_amount',
        'provider',
        'data_description_id',
        'project_description_id',
        'contact_person_id',
    ];

    public function dataDescription()
    {
        return $this->hasOne(DataDescription::class);
    }
    public function projectDescription()
    {
        return $this->hasOne(ContactPerson::class);
    }
    public function contactPerson()
    {
        return $this->hasOne(ContactPerson::class);
    }
    public function projectTeams()
    {
        return $this->hasMany(ProjectTeam::class);
    }
    public function projectDocuments()
    {
        return $this->hasMany(ProjectTeam::class);
    }
    public function realisedGrants()
    {
        return $this->hasMany(RealisedGrant::class);
    }
}
