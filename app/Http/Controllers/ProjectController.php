<?php

namespace App\Http\Controllers;

use App\Models\DataDescription;
use App\Models\ProjectDocument;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    public function create()
    {
        return view('new-project');
    }

    public function store(Request $request)
    {
        /* TODO: Finish validation
        Validator::make(
            $request->all(),
            $rules = [
                'project_number' => [
                    'required',
                    'string',
                    'max:255'
                ],
                'name' => [
                    'required',
                    'string',
                    'max:255'
                ],
                'region' => [
                    'required',
                    'string',
                    'max:255'
                ],
                'year' => [
                    'required',
                    'date'
                ],
                'time' => [
                    'required',
                    'integer'
                ],
                'from' => [
                    'required',
                    'date'
                ],
                'to' => [
                    'required',
                    'date'
                ],
                'type' => [
                    'required'
                ],
                'cost' => [
                    'required',
                    'integer'
                ],
                'own_sources' => [
                    'required',
                    'integer'
                ],
                'support_amount' => [
                    'required',
                    'integer'
                ],
                'support_amount' => [
                    'required',
                    'string',
                    'max:255'
                ],
                'garant' => [
                    'required'
                ],
                'contact_person' => [
                    'required'
                ]
            ],
            $messages = []
        )->validate();
        */

        //Create a new instance of project linked entities
        $projectData = DataDescription::create([]);

        $projectDocuments = ProjectDocument::create([
            'project_documentation' => $request['project_documentation'],
            'dpp' => $request['dpp'],
            'payroll_overview' => $request['payroll_overview'],
            'financial_overview' => $request['financial_overview'],
            'budget_overview' => $request['budget_overview'],
            'final_report' => $request['final_report'],


        ]);
        $project = Project::create();
    }
}
