@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        <h1 class="p-2 my-4">Nadpis</h1>
        <div class="container mx-0 mb-5 bg-white position-relative">
            <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i
                    class="fas fa-times mx-2 fa-lg align-middle"></i></button>
            <h2 class="py-3">Nadpis karty</h2>
            <form>
                <div class="mb-3 mt-3">
                    <label for="text">Jméno:</label>
                    <input type="text" class="form-control" id="firstname" name="name">
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Příjmení:</label>
                    <input type="text" class="form-control" id="surmane" name="surname">
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Titul před jménem:</label>
                    <input type="text" class="form-control" id="text" name="degree">
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Titul za jménem:</label>
                    <input type="text" class="form-control" id="text" name="degree">
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Email:</label>
                    <input type="text" class="form-control" id="text" name="email">
                </div>


                <div class="mb-3 mt-3">
                    <label for="form-select">Pohlaví:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option>Muž</option>
                            <option>Žena</option>
                        </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="form-select">Role:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option>Administrator</option>
                            <option>Director</option>
                            <option>Supervizor</option>
                            <option>Empolyee</option>
                            <option>Collaborator</option>
                            <option>Operator</option>
                        </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="form-select">Nadřízený:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                </div>
            </form>
        </div>
    </div>
@endsection
