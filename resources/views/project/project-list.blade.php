@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')

    <div class="content mx-auto">
        <h1 class="p-2 my-4">Správa projektů</h1>
        <div class="container mx-0 mb-5 bg-white position-relative">
            <!--    
                                                                                                                                        <button type="button" class="btn-discard bg-white float-end">Zahodit změny<i class="fas fa-times mx-2 fa-lg align-middle"></i></button>
                                                                                                                                            <h2 class="py-3">Nadpis karty</h2>
                                                                                                                                    -->
            <table class="table table-stripped">
                <tr>
                    <th>Číslo projektu</th>
                    <th>Pracovní název projektu</th>
                    <th>Zkratka</th>
                    <th>Oblast</th>
                    <th>Rok</th>
                    <th>Doba realizace</th>
                    <th>Období od</th>
                    <th>Období do</th>
                    <th>Typ projektu</th>
                    <th>Celkové náklady</th>
                    <th>Vlastní zdroje</th>
                    <th>Výše podpory</th>
                    <th>Poskytovatel</th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <th>
                            {{ $project->project_number }}
                        </th>
                        <th>
                            {{ $project->name }}
                        </th>
                        <th>
                            {{ $project->shortcut }}
                        </th>
                        <th>
                            {{ $project->region }}
                        </th>
                        <th>
                            {{ $project->year }}
                        </th>
                        <th>
                            {{ $project->time }}
                        </th>
                        <th>
                            {{ $project->from }}
                        </th>
                        <th>
                            {{ $project->to }}
                        </th>
                        <th>
                            @if ($project->type == 0)
                                Interní
                            @elseif($project->type == 1)
                                Smluvní
                            @elseif($project->type == 2)
                                Grant
                            @endif
                        </th>
                        <th>
                            {{ $project->cost }}
                        </th>
                        <th>
                            {{ $project->own_sources }}
                        </th>
                        <th>
                            {{ $project->support_amount }}
                        </th>
                        <th>
                            {{ $project->provider }}
                        </th>
                        <th>
                            <a href="/project-edit/{{ $project->id }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
