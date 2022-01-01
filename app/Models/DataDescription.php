<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDescription extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'from',
        'to',
        'data',
        'label',
        'syntax',
        'questionnaire',
        'search',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
