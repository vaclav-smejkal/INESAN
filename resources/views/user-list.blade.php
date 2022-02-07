@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="content mx-auto">
    <h1 class="p-2 my-4">Správa uživatelů</h1>
    <div class="container mx-0 mb-5 bg-white position-relative">
        <!--    
    <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i class="fas fa-times mx-2 fa-lg align-middle"></i></button>
        <h2 class="py-3">Nadpis karty</h2>
-->     <table class="table table-stripped">
            <tr>
                <th>Jméno</th>
                <th>Příjmení</th>
                <th>Email</th>
                <th>Role</th>
                <th>Akce</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <th>
                        {{ $user->first_name }}
                    </th>
                    <th>
                        {{ $user->last_name }}
                    </th>
                    <th>
                        {{ $user->email }}
                    </th>   
                    <th>
                        @foreach ($user->getRoleNames() as $role)
                            {{ $role }}
                        @endforeach
                    </th>
                    <th>
                        <a href="/user-edit/{{ $user->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection