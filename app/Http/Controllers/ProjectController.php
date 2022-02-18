<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function create()
    {
        $users = User::get();
        return view('project.project-create-or-edit', ['users' => $users]);
    }

    public function store(Request $request)
    {
        dd($request->type);
        if ($request['project-id'] == null) {
            Validator::make(
                $request->all(),
                $rules = [
                    'project_number' => ['required', 'string', 'max:255'],
                    'project_name' => ['required', 'string', 'max:255'],
                    'shortcut' => ['required', 'string', 'max:255'],
                    'region' => ['required', 'string', 'max:255'],
                    'year' => ['required', 'date',],
                    'time' => ['required', 'integer'],
                    'from' => ['required', 'date',],
                    'to' => ['required', 'date',],
                    'type' => ['required'],
                    'cost' => ['required', 'integer'],
                    'own_sources' => ['required', 'integer'],
                    'support_amount' => ['required', 'integer'],
                    'provider' => ['required', 'text'],
                    'guarantor' => ['required'],
                    'solver' => ['required'],
                    'co_solver' => ['required'],
                    'project_description' => ['required', 'text'],
                    'contact_person' => ['required', 'text'],
                    'collecting_from' => ['required'],
                    'collecting_to' => ['required'],
                ],
                $messages = []
            )->validate();
            $project = Project::create([
                'project_number' => $request['project_number'],
                'project_name' => $request['project_name'],
                'shortcut' => $request['shortcut'],
                'region' => $request['region'],
                'year' => $request['year'],
                'time' => $request['time'],
                'from' => $request['from'],
                'to' => $request['to'],
                'type' => $request['type'],
                'cost' => $request['cost'],
                'own_sources' => $request['own_sources'],
                'support_amount' => $request['support_amount'],
                'provider' => $request['provider'],
            ]);
            //chybi pridani 'data_description_id' 'project_description_id' 'contact_person_id' // vytvorit jakoby tabulku a ty id hodit do tabulky project
            dd($request->guarantor);
        } else {
            $project = Project::find($request['project-id']);
            if ($project == null) {
                return redirect()->back()->with('error', 'Project not found');
            }

            $project->project_number = $request['project_number'];
            $project->project_name = $request['project_name'];
            $project->shortcut = $request['shortcut'];
            $project->region = $request['region'];
            $project->year = $request['year'];
            $project->time = $request['time'];
            $project->from = $request['from'];
            $project->to = $request['to'];
            $project->type = $request['type'];
            $project->cost = $request['cost'];
            $project->own_sources = $request['own_sources'];
            $project->support_amount = $request['support_amount'];
            $project->provider = $request['provider'];

            $project->save();
        }
    }
    public function list()
    {
        $projects = Project::all();
        return view('project.project-list', ['projects' => $projects]);
    }
    public function edit($id)
    {
        $project = Project::find($id);
        $users = User::get();
        return view('project.project-create-or-edit', ['project' => $project, 'users' => $users]);
    }
}
