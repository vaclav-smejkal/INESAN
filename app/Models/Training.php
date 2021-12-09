<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'provider',
        'time',
        'dedication',
        'certificate',
        'authorzation_time',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
