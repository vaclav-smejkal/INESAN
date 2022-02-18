@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        @if (isset($project))
            <h1 class="p-2 my-4">Editace zakázky smluvního výzkumu</h1>
        @else
            <h1 class="p-2 my-4">Přidání nové zakázky smluvního výzkumu</h1>
        @endif
        <div class="container mx-0 mb-5 bg-white position-relative">
            <form method="POST" action="/project-store" class="p-3">
                @if (isset($project))
                    <h2 class="py-3">{{ $project->project_number }} {{ $project->name }}</h2>
                @else

                    <h2 class="p-2 my-4">Projektová část</h2>
                @endif
                <div class="mb-3 mt-3">
                    <label for="text">Číslo projektu:</label>
                    <input type="text" class="form-control" id="project-number" name="project_number"
                        value="{{ isset($project) ? "$project->project_number" : '' }}">
                    @error('project_number')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Pracovní název projektu:</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ isset($project) ? "$project->name" : '' }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Zkratka:</label>
                    <input type="text" class="form-control" id="shortcut" name="shortcut"
                        value="{{ isset($project) ? "$project->shortcut" : '' }}">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Oblast:</label>
                    <input type="text" class="form-control" id="region" name="region"
                        value="{{ isset($project) ? "$project->region" : '' }}">
                    @error('region')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="year">Rok:</label>
                    <input type="date" class="form-control" id="year" name="year"
                        value="{{ isset($project) ? "$project->year" : '' }}">
                    @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="time">Doba realizace v měsících:</label>
                    <input type="number" class="form-control" id="time" name="time"
                        value="{{ isset($project) ? "$project->time" : '' }}">
                    @error('time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="from">Období od:</label>
                    <input type="date" class="form-control" id="from" name="from"
                        value="{{ isset($project) ? "$project->from" : '' }}">
                    @error('from')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="to">Období do:</label>
                    <input type="date" class="form-control" id="to" name="to"
                        value="{{ isset($project) ? "$project->to" : '' }}">
                    @error('to')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Typ projektu:</label>
                    <select class="form-select form-control" name="type">
                        <option {{ isset($project) ? '' : 'selected=selected' }} selected hidden class="d-none">
                        </option>
                        <option {{ isset($project) ? ($project->type == '0' ? 'selected=selected' : '') : '' }}>
                            Interní
                        </option>
                        <option {{ isset($project) ? ($project->type == '1' ? 'selected=selected' : '') : '' }}>
                            Smluvní
                        </option>
                        <option {{ isset($project) ? ($project->type == '2' ? 'selected=selected' : '') : '' }}>Grant
                        </option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="costs">Celkové náklady:</label>
                    <input type="number" class="form-control" id="cost" name="cost"
                        value="{{ isset($project) ? "$project->cost" : '' }}">
                    @error('costs')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="own_sources">Vlastní zdroje:</label>
                    <input type="number" class="form-control" id="own_sources" name="own_sources"
                        value="{{ isset($project) ? "$project->own_sources" : '' }}">
                    @error('own_sources')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="support_amount">Výše podpory:</label>
                    <input type="number" class="form-control" id="support_amount" name="support_amount"
                        value="{{ isset($project) ? "$project->support_amount" : '' }}">
                    @error('support_amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 mt-3">
                    <label for="text">Poskytovatel:</label>
                    <input type="text" class="form-control" id="provider" name="provider"
                        value="{{ isset($project) ? "$project->provider" : '' }}">
                    @error('provider')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h2 class="p-2 my-4">Projektový tým</h2>
                <div class="mb-3 mt-3">
                    <label for="form-select">Garant oblasti:</label>
                    <select class="form-select form-control" name="guarantor">
                        <option {{ isset($project) ? '' : 'selected=selected' }}hidden class="d-none"></option>
                        @foreach ($users as $user)
                            <option
                                {{ isset($project) ? ($project->guarantor == $user->id ? 'selected=selected' : '') : '' }}
                                value="{{ $user->id }}">{{ $user->first_name }}</option>
                        @endforeach
                    </select>
                    @error('garant')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Řešitel:</label>
                    <select class="form-select form-control" name="solver">
                        <option {{ isset($project) ? '' : 'selected=selected' }}hidden class="d-none"></option>
                        @foreach ($users as $user)
                            <option
                                {{ isset($project) ? ($project->solver == $user->id ? 'selected=selected' : '') : '' }}
                                value="{{ $user->id }}">{{ $user->first_name }}</option>
                        @endforeach
                    </select>
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="form-select">Spoluřešitelé:</label>
                    <select class="form-select form-control" name="co_solver" multiple>
                        @foreach ($users as $user)
                            <option
                                {{ isset($project) ? ($project->co_solver == $user->id ? 'selected=selected' : '') : '' }}
                                value="{{ $user->id }}">{{ $user->first_name }}</option>
                        @endforeach
                    </select>
                </div>
                <h2 class="p-2 my-4">Popis projektu</h2>
                <div class="mb-3 mt-3">
                    <textarea class="form-control" id="project-description" name="project_description"
                        value="{{ isset($project) ? "$project->description" : '' }}"></textarea>
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h2 class="p-2 my-4">Kontaktní osoba</h2>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="contact-person" name="contact_person"
                        value="{{ isset($project) ? "$project->contact_person" : '' }}">
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h2 class="p-2 my-4">Popis dat</h2>
                <div class="mb-3 mt-3">
                    <label for="collectiong-from">Sběr dat od:</label>
                    <input type="month" class="form-control" id="collectiong-from" name="collectiong_from"
                        value="{{ isset($project) ? "$project->collecting_from" : '' }}">
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="collecting-to">Sběr dat do:</label>
                    <input type="month" class="form-control" id="collecting-to" name="collecting-to"
                        value="{{ isset($project) ? "$project->collecting_to" : '' }}">
                    @error('first-name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="data"
                            value="{{ isset($project) ? "$project->data" : '' }}"> Data
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
                        <input class="form-check-input" type="checkbox" name="project_documentation"> Projektová dokumentace
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="dpp"> DPP
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="payroll_overview"> Mzdový přehled
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="financial_overview"> Finanční přehled
                        (výsledovka)
                    </label>
                </div>
                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="budget_overview"> Finanční přehled (rozpočty)
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
                        <input class="form-check-input" type="checkbox" name="final_report"> Závěrečná zpráva
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
                @if (isset($project))
                    <button type="submit" class="btn btn-submit my-3">Aktualizovat projekt</button>
                @else
                    <button type="submit" class="btn btn-submit my-3">Přidat projekt</button>
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
