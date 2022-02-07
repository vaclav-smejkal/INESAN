@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

<div class="content mx-auto">
    @if(isset($user))
        <h1 class="p-2 my-4">Editace uživatele:</h1>
    @else
        <h1 class="p-2 my-4">Registrace nového uživatele</h1>
    @endif
    <div class="container mx-0 mb-5 bg-white position-relative">
        <!--    
    <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i class="fas fa-times mx-2 fa-lg align-middle"></i></button>
        <h2 class="py-3">Nadpis karty</h2>
-->     @if(isset($user))
            <h2 class="py-3">{{ $user->first_name }} {{ $user->last_name }}</h2>
        @endif
        <form method="POST" action="/user-store">
            @csrf
            <input type="hidden" name="user-id" id="user-id" value="{{ $user->id ?? '' }}">
            <div class="mb-3 mt-3">
                <label for="text">Jméno:</label>
                <input required type="text" class="form-control" id="first-name" name="first-name" value="{{ isset($user) ? "$user->first_name" : ""}}">
                @error('first-name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="text">Příjmení:</label>
                <input required type="text" class="form-control" id="last-name" name="last-name" value="{{ isset($user) ? "$user->last_name" : ""}}">
                @error('last-name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="text">Titul před jménem:</label>
                <input type="text" class="form-control" id="title-before-name" name="title-before-name" value="{{ isset($user) ? "$user->title_before_name" : ""}}">
                @error('title-before-name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="text">Titul za jménem:</label>
                <input type="text" class="form-control" id="title-after-name" name="title-after-name"  value="{{ isset($user) ? "$user->title_after_name" : ""}}">
                @error('title-after-name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="text">Email:</label>
                <input required type="text" class="form-control" id="text" name="email"value="{{ isset($user) ? "$user->email" : ""}}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label for="form-select">Pohlaví:</label>
                <select required class="form-select form-control" name="gender">
                    <option {{ isset($user) ? "" : "selected=selected" }} hidden class="d-none"></option>
                    <option {{ isset($user) ? $user->gender == "Muž" ? "selected=selected" : "" : "" }}>Muž</option>
                    <option {{ isset($user) ? $user->gender == "Žena" ? "selected=selected" : "" : "" }}>Žena</option>
                </select>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="form-select">Role:</label>
                <select required class="form-select form-control" name="role">
                    @php
                        if(isset($user)) {
                           $role = $user->getRoleNames()[0]; 
                        }
                    @endphp
                    <option {{ isset($role) ? "" : "selected=selected" }} hidden class="d-none"></option>
                    <option {{ isset($role) ? $role == "Administrator" ? "selected=selected" : "" : "" }} name="role">Administrator</option>
                    <option {{ isset($role) ? $role == "Director" ? "selected=selected" : "" : "" }} name="role">Director</option>
                    <option {{ isset($role) ? $role == "Supervisor" ? "selected=selected" : "" : "" }} name="role">Supervisor</option>
                    <option {{ isset($role) ? $role == "Employee" ? "selected=selected" : "" : "" }} name="role">Employee</option>
                    <option {{ isset($role) ? $role == "Collaborator" ? "selected=selected" : "" : "" }} name="role">Collaborator</option>
                    <option {{ isset($role) ? $role == "Operator" ? "selected=selected" : "" : "" }} name="role">Operator</option>
                </select>
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="form-select">Nadřízený:</label>
                <select required class="form-select form-control" name="higher">
                    <option {{ isset($user) ? "" : "selected=selected" }} hidden class="d-none"></option>
                    @foreach ($highers as $higher)
                    <option {{ isset($user) ? $user->higher == $higher->id ? "selected=selected" : "" : "" }} value="{{ $higher->id }}">{{ $higher->first_name }}</option>
                    @endforeach
                </select>
                @error('higher')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            @if(isset($user))
                <button type="submit" class="btn btn-submit my-3">Aktualizovat uživatele</button>
            @else
                <button type="submit" class="btn btn-submit my-3">Přidat uživatele</button>
            @endif
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </form>
    </div>
</div>
@endsection