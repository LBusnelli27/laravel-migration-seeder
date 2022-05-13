@extends('layouts.main')

@section('title-tab', 'Index')

@section('main-content')
    <div class="container-fluid">
        <h1 class="text-center mb-5">Ecco tutti i treni disponibili</h1>
        <div class="row p-3">
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ $train->azienda }} - {{ $train->codice }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $train->stazione_partenza }} - {{ $train->stazione_arrivo }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Orario di partenza: {{ $train->orario_partenza }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Orario di arrivo: {{ $train->orario_arrivo }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Carrozze totali: {{ $train->n_carrozze }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection