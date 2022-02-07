<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'position',
        'questionnaire_id'
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
