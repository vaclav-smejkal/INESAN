<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocument extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'project_documentation',
        'DPP',
        'payroll_overview',
        'financial_overview',
        'final_report',
        'continous_report',
        'close_contract',
        'project_id',
    ];

    //M:N UserProjectDocument
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
