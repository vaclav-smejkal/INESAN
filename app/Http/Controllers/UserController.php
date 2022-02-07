<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        $highers = User::whereHas("roles", function ($q) {
            $q->where("name", "Administrator")
                ->orWhere("name", "Director")
                ->orWhere("name", "Supervisor");
        })->get();
        $roles = Role::whereNotIn('name', [
            'Guarantor',
            'Solver',
            'Co_solver',
            'Team_member',
            'Assistant_worker'
        ])->get();

        return view('user-create-or-edit', ['highers' => $highers, 'roles' => $roles]);
    }

    public function store(Request $request)
    {
        //var_dump($request);
        if ($request['user-id'] == null) {
            Validator::make(
                $request->all(),
                $rules = [
                    'first-name' => [
                        'required',
                        'string',
                        'max:255'
                    ],
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        Rule::unique(User::class),
                    ],
                    'last-name' => ['required', 'string', 'max:255'],
                    'gender' => ['required'],
                    'role' => ['required'],
                    'higher' => ['required'],
                ],
                $messages = []
            )->validate();
            $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
            $password = substr($random, 0, 10);
            $passwordToDb = Hash::make($password);

            $email_data = array(
                'first-name' => $request['first-name'],
                'email' => $request['email'],
                'password' => $password,
            );
            $user = User::create([
                'first_name' => $request['first-name'],
                'last_name' => $request['last-name'],
                'title_before_name' => $request['title-before-name'],
                'title_after_name' => $request['title-after-name'],
                'email' => $request['email'],
                'gender' => $request['gender'],
                'higher' => $request['higher'],
                'password' => $passwordToDb,
            ]);
            $user->assignRole($request['role']);

            try {
                Mail::send('email-registration', $email_data, function ($message) use ($email_data) {
                    $message->from('BCtestMail2@gmail.com');
                    $message->sender('BCtestMail2@gmail.com');
                    $message->to($email_data['email']);
                    $message->subject('INESAN registrace');
                });
            } catch (\Exception $e) {
            }
        } else {
            $user = User::find($request['user-id']);
            if ($user == null) {
                return redirect()->back()->with('error', 'User not found');
            }

            $user->first_name = $request['first-name'];
            $user->last_name = $request['last-name'];
            $user->title_before_name = $request['title-before-name'];
            $user->title_after_name = $request['title-after-name'];
            $user->email = $request['email'];
            $user->gender = $request['gender'];
            $user->higher = $request['higher'];
            $user->save();
        }



        return redirect('/user-create')->with('message', 'Uživatel byl přidán');
    }

    public function list()
    {
        $users = User::all();
        return view('user-list', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $highers = User::whereHas("roles", function ($q) {
            $q->where("name", "Administrator")
                ->orWhere("name", "Director")
                ->orWhere("name", "Supervisor");
        })->get();
        $roles = Role::whereNotIn('name', [
            'Guarantor',
            'Solver',
            'Co_solver',
            'Team_member',
            'Assistant_worker'
        ])->get();

        return view('user-create-or-edit', ['user' => $user, 'highers' => $highers, 'roles' => $roles]);
    }
}
