<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <h1 class="text-center">Trains</h1>

    <table class="table">
      <thead>
        <tr>
          {{-- <th>ID</th> --}}
          <th>Azienda</th>
          <th>Stazione di partenza</th>
          <th>Stazione di arrivo</th>
          <th>Orario di partenza</th>
          <th>Orario di arrivo</th>
          <th>Codice treno</th>
          {{-- <th>Numero carrozze</th> --}}
          <th>In orario</th>
          <th>Cancellato</th>
        </tr>
      </thead>
      <tbody>
        @forelse($trains as $train)
            <tr>
              {{-- <td>{{ $train->id }}</td> --}}
              <td>{{ $train->agency }}</td>
              <td>{{ $train->departure_station }}</td>
              <td>{{ $train->arrival_station }}</td>
              <td>{{ $train->departure_time }}</td>
              <td>{{ $train->arrival_time }}</td>
              <td>{{ $train->train_code }}</td>
              {{-- <td>{{ $train->carriages_number }}</td> --}}
              <td>{{ $train->in_time ? 'Si' : 'No' }}</td>
              <td>{{ $train->cancelled  ? 'Si' : 'No' }}</td>
            </tr>
        @empty
            <tr>
              <td colspan="100%">Nessun risultato trovato</td>
            </tr>
        @endforelse
      </tbody>
    </table>
  </body>

</html>
