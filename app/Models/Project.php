<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'number',
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
    ];
}
