<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContinuousReport extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'year',
        'completed',
        'project_documents_id'
    ];

    //N:1 ProjectDocument
    public function projectDocuments()
    {
        return $this->belongsTo(ProjectDocument::class);
    }
}
