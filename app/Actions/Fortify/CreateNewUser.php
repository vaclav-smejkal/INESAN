<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'last-name' => ['required', 'string', 'max:255'],
            'title-before-name' => ['required', 'string', 'max:255'],
            'title-after-name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'role' => ['required'],
            'higher' => ['required'],

        ])->validate();
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
        $password = substr($random, 0, 10);
        $passwordToDb = Hash::make($password);

        $email_data = array(
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => $password,
        );

        Mail::send('email-registration', $email_data, function ($message) use ($email_data) {
            $message->from('BCtestMail2@gmail.com');
            $message->sender('BCtestMail2@gmail.com');
            $message->to($email_data['email']);
            $message->subject('INESAN registrace');
        });

        $user = User::create([
            'first_name' => $input['name'],
            'last_name' => $input['last-name'],
            'title_before_name' => $input['title-before-name'],
            'title_after_name' => $input['title-after-name'],
            'email' => $input['email'],
            'gender' => $input['gender'],
            'higher' => $input['higher'],
            'password' => $passwordToDb,
        ]);
        $role = $input['role'];
        $user->assignRole($input['role']);
        return $user;
    }
}
