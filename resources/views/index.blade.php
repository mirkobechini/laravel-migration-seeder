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
            <div class="table-responsive border border-2 border-primary rounded my-3">
                <table class="table  table-striped">
                    <thead>
                        <tr class="bg-primary">
                            <th scope="col" class="bg-primary-subtle">Azienda</th>
                            <th scope="col" class="bg-primary-subtle">Stazione Partenza</th>
                            <th scope="col" class="bg-primary-subtle">Stazione Arrivo</th>
                            <th scope="col" class="bg-primary-subtle">Orario Partenza</th>
                            <th scope="col" class="bg-primary-subtle">Orario Arrivo</th>
                            <th scope="col" class="bg-primary-subtle">Codice Treno</th>
                            <th scope="col" class="bg-primary-subtle">Totale Carrozze</th>
                            <th scope="col" class="bg-primary-subtle">In orario</th>
                            <th scope="col" class="bg-primary-subtle">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr class="">
                                <td scope="row">{{ $train['company'] }}</td>
                                <td>{{ $train['start_station'] }}</td>
                                <td>{{ $train['arrive_station'] }}</td>
                                <td>{{ $train['start_dateTime'] }}</td>
                                <td>{{ $train['arrive_dateTime'] }}</td>
                                <td class="text-center">{{ $train['train_code'] }}</td>
                                <td class="text-center">{{ $train['carriages_number'] }}</td>
                                <td>{{ $train['onTime'] }}</td>
                                <td>{{ $train['deleted'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endsection

</body>

</html>
