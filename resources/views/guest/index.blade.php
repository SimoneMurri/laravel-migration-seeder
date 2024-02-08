<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
<h1>
        Today's trains
    </h1>
    <ul>
        @forelse ($trains as $train)
            <li>
                <h5>
                    {{ $train->azienda }}: From {{ $train->stazione_di_partenza }} to {{ $train->stazione_di_arrivo }}
                </h5>
                <p>
                    {{ $train->orario_di_partenza }} -> {{ $train->orario_di_arrivo }}
                    {{ $train->codice_treno }}, vagoni: {{ $train->numero_vagoni }},
                    {{ ($train->in_orario) ? 'in_orario' : 'cancellato' }},
                    {{ ($train->cancellato) ? 'CANCELLATO' : '' }}
                </p>
            </li>
        @empty
            <li>
                There are no trains available today...
            </li>
        @endforelse
    </ul>
</body>
</html>