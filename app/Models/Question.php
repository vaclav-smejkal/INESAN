<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'question_text',
        'position',
        'question_type',
        'section_id',
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
