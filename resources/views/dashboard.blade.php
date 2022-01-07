@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        <h1 class="p-2 my-4">Nadpis</h1>
        <div class="container mx-0 mb-5 bg-white position-relative">
            <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i
                    class="fas fa-times mx-2 fa-lg align-middle"></i></button>
            <h2 class="py-3">Nadpis karty</h2>
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="text">Text:</label>
                    <input type="text" class="form-control" id="text" placeholder="Text" name="text">
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Vyberte:</label>
                    <select class="form-select form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <p>Vyberte jednu z možností:</p>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option
                    1
                    <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
                    <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Option 3
                    <label class="form-check-label"></label>
                </div>
                <div class="mb-3 mt-3">
                    <label for="comment">Text:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="date">Datum:</label>
                    <input type="date" class="form-control" id="date" placeholder="Datum" name="date">
                </div>
                <div class="mb-3 mt-3">
                    <label for="number">Číslo:</label>
                    <input type="number" class="form-control" id="number" placeholder="Číslo" name="number" min="1"
                        max="10">
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="button" id="icon-submit" class="btn btn-submit my-3" onclick="showIcon_submit()">Odevzdat
                    dotazník</button>
                <button type="button" id="icon-save" class="btn btn-save my-3" onclick="showIcon_save()">Uložit
                    změny</button>
                <button type="button" id="icon-cancel" class="btn btn-cancel my-3" onclick="showIcon_cancel()">Zahodit
                    změny</button>
            </form>
        </div>
    </div>
@endsection
