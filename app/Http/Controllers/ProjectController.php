<?php

namespace App\Http\Controllers;

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
                ]
            ],
            $messages = []
        )->validate();
    }
}
