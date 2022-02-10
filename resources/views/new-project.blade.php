@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        <h1 class="p-2 my-4">Přidání nové zakázky smluvního výzkumu</h1>
        <div class="container mx-0 mb-5 bg-white position-relative">
            <form class="p-3">
                <h2 class="p-2 my-4">Projektová část</h2>
                <div class="mb-3 mt-3">
                    <label for="text">Číslo projektu:</label>
                    <input type="text" class="form-control" id="project-number" name="project-number">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Pracovní název projektu:</label>
                    <input type="text" class="form-control" id="working-title" name="working-title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Zkratka:</label>
                    <input type="text" class="form-control" id="abbreviation" name="abbreviation">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Oblast:</label>
                    <input type="text" class="form-control" id="area" name="area">
                </div>
                <div class="mb-3 mt-3">
                    <label for="year">Rok:</label>
                    <input type="date" class="form-control" id="year" name="year">
                </div>
                <div class="mb-3 mt-3">
                    <label for="time">Čas:</label>
                    <input type="number" class="form-control" id="time" name="time">
                </div>
                <div class="mb-3 mt-3">
                    <label for="from">Období od:</label>
                    <input type="date" class="form-control" id="from" name="from">
                </div>
                <div class="mb-3 mt-3">
                    <label for="to">Období do:</label>
                    <input type="date" class="form-control" id="to" name="to">
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Typ projektu:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option>Interní</option>
                            <option>Smluvní</option>
                            <option>Grant</option>                           
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="costs">Celkové náklady:</label>
                    <input type="number" class="form-control" id="costs" name="costs">
                </div>
                <div class="mb-3 mt-3">
                    <label for="resources">Vlastní zdroje:</label>
                    <input type="number" class="form-control" id="resources" name="resources">
                </div>
                <div class="mb-3 mt-3">
                    <label for="funding">Výše podpory:</label>
                    <input type="number" class="form-control" id="funding" name="funding">
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Poskytovatel:</label>
                    <input type="text" class="form-control" id="provider" name="provider">
                </div>
                <h2 class="p-2 my-4">Projektový tým</h2>
                <div class="mb-3 mt-3">
                    <label for="form-select">Garant oblasti:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option></option>
                            <option></option>
                            <option></option>                           
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Řešitel:</label>
                        <select class="form-select form-control">
                            <option selected hidden class="d-none"></option>
                            <option></option>
                            <option></option>
                            <option></option>                           
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Spoluřešitelé:</label>
                        <select class="form-select form-control" multiple>
                            <option selected hidden class="d-none"></option>
                            <option></option>
                            <option></option>
                            <option></option>                           
                        </select>
                </div>
                <h2 class="p-2 my-4">Popis projektu</h2>
                <div class="mb-3 mt-3">
                    <textarea class="form-control" id="project-info" name="project-info"></textarea>
                </div>                
                <h2 class="p-2 my-4">Kontaktní osoba</h2>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="contact-person" name="contact-person">
                </div>
                <h2 class="p-2 my-4">Popis dat</h2>
                <div class="mb-3 mt-3">
                    <label for="collectiong-from">Sběr dat od:</label>
                    <input type="month" class="form-control" id="collectiong-from" name="collectiong-from">
                </div>
                <div class="mb-3 mt-3">
                    <label for="collecting-to">Sběr dat do:</label>
                    <input type="month" class="form-control" id="collecting-to" name="collecting-to">
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="data"> Data
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="labels"> Labely
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="syntax"> Syntax
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="form"> Dotazník
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="research"> Rešerše
                    </label>
                </div>
                <h2 class="p-2 my-4">Dokumenty jednotlivých projektů</h2>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="documentation"> Projektová dokumentace
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="dpp"> DPP
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="wage-overview"> Mzdový přehled
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="profit-loss-overview"> Finanční přehled (výsledovka)
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="budget-overview"> Finanční přehled (rozpočty)
                    </label>
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Ohlasy:</label>
                        <select class="form-select form-control" multiple>
                            <option selected hidden class="d-none"></option>
                            <option></option>
                            <option></option>
                            <option></option>                           
                        </select>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="final-report"> Závěrečná zpráva
                    </label>
                </div>
                <p>Průběžné zprávy za jednotlivé roky:</p>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="year"> Rok
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="year"> Rok
                    </label>
                </div> 
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="year"> Rok
                    </label>
                </div>                
                <button type="button" id="icon-submit" class="btn btn-submit my-3" onclick="showIcon_submit()">Přidat projekt</button>
            </form>
        </div>
    </div>
@endsection