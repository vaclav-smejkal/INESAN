@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        <h1 class="p-2 my-4">Nadpis</h1>
        <div class="container mx-0 mb-5 bg-white position-relative">
            <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i
                    class="fas fa-times mx-2 fa-lg align-middle"></i></button>
            <h2 class="py-3">Nadpis karty</h2>
            <form method="POST" action="/user-store">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="text">Jméno:</label>
                    <input required type="text" class="form-control" id="first-name" name="first-name">
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Příjmení:</label>
                    <input required type="text" class="form-control" id="last-name" name="last-name">
                    @error('last-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Titul před jménem:</label>
                    <input type="text" class="form-control" id="title-before-name" name="title-before-name">
                    @error('title-before-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Titul za jménem:</label>
                    <input type="text" class="form-control" id="title-after-name" name="title-after-name">
                    @error('title-after-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Email:</label>
                    <input required type="text" class="form-control" id="text" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    <label for="form-select">Pohlaví:</label>
                    <select required class="form-select form-control" name="gender">
                        <option selected hidden class="d-none"></option>
                        <option>Muž</option>
                        <option>Žena</option>
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
                        <option selected hidden class="d-none"></option>
                        <option name="role">Administrator</option>
                        <option name="role">Director</option>
                        <option name="role">Supervisor</option>
                        <option name="role">Employee</option>
                        <option name="role">Collaborator</option>
                        <option name="role">Operator</option>
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
                        <option selected hidden class="d-none"></option>
                        @foreach ($highers as $higher)
                            <option value="{{ $higher->id }}">{{ $higher->first_name }}</option>
                        @endforeach
                    </select>
                    @error('higher')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit">Přidat uživatele</button>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
