@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="content mx-auto">
    <h1 class="p-2 my-4">Správa uživatelů</h1>
    <div class="container mx-0 mb-5 bg-white py-3 position-relative">
        <!--    
    <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i class="fas fa-times mx-2 fa-lg align-middle"></i></button>
        <h2 class="py-3">Nadpis karty</h2>
    --> <div class="table-responsive">   
            <table class="table table-striped table-hover">
                <tr>
                    <th>Jméno</th>
                    <th>Příjmení</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Akce</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->first_name }}
                        </td>
                        <td>
                            {{ $user->last_name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>   
                        <td>
                            @foreach ($user->getRoleNames() as $role)
                                {{ $role }}
                            @endforeach
                        </td>
                        <td class="text-center">
                            <a href="/user-edit/{{ $user->id }}">
                                <i class="icon-red fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection