<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>

<body>
    <div class="container">

        <h1>ciao</h1>

        <div
            class="table-responsive">
            <table
                class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione Partenza</th>
                        <th scope="col">Stazione Arrivo</th>
                        <th scope="col">Orario Partenza</th>
                        <th scope="col">Orario Arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">Totale Carrozze</th>
                        <th scope="col">In orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trains as $train)
                    <tr class="">
                        <td scope="row">{{$train["company"]}}</td>
                        <td>{{$train["start_station"]}}</td>
                        <td>{{$train["arrive_station"]}}</td>
                        <td>{{$train["start_dateTime"]}}</td>
                        <td>{{$train["arrive_dateTime"]}}</td>
                        <td>{{$train["train_code"]}}</td>
                        <td>{{$train["carriages_number"]}}</td>
                        <td>{{$train["onTime"]}}</td>
                        <td>{{$train["deleted"]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


</body>

</html>