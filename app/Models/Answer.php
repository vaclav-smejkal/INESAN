<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'question_id',
        'answer_text',
        'answer_type_id',
        'position',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answerType()
    {
        return $this->belongsTo(AnswerType::class);
    }
}
