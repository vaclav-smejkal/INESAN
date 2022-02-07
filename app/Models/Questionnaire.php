<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'position'
    ];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
