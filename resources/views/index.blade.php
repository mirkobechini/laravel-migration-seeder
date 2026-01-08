@php
    $today = new DateTime('today');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>

<body>
    @extends('layouts.master')
    @section('content')
        <div class="container">
            <div class="row pt-4 ps-1 align-item-center">
                <span class="h2 fw-bold">
                    Date: {{ $today->format("d-m-Y"); }}
                </span>
            </div>

            <div class="table-responsive border border-2 border-primary rounded my-3">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Azienda</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Stazione Partenza</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Stazione Arrivo</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Orario Partenza</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Orario Arrivo</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Codice Treno</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Totale Carrozze</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">In orario</th>
                            <th scope="col" class="bg-primary-subtle text-center align-middle">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            @php
                                $trainStart = new DateTime($train['start_dateTime']);
                                $trainArrive = new DateTime($train['arrive_dateTime']);
                            @endphp
                            @if ($trainStart >= $today)
                                <tr class="">
                                    <td class="text-center align-middle" scope="row">{{ $train['company'] }}</td>
                                    <td class="text-center align-middle">{{ $train['start_station'] }}</td>
                                    <td class="text-center align-middle">{{ $train['arrive_station'] }}</td>
                                    <td class="text-center align-middle">{{ $trainStart->format("H:i d/m") }}</td>
                                    <td class="text-center align-middle">{{ $trainArrive->format("H:i d/m") }}</td>
                                    <td class="text-center align-middle">{{ $train['train_code'] }}</td>
                                    <td class="text-center align-middle">{{ $train['carriages_number'] }}</td>
                                    <td class="text-center align-middle @if(!$train['onTime']) text-warning @endif">{{ ($train['onTime'])?"In orario":"In ritardo" }}</td>
                                    <td class="text-center align-middle @if($train['deleted']) text-danger @endif">{{ ($train['deleted'])?"Cancellato":"" }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection

</body>

</html>
