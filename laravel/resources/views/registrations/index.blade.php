<head>
    <title>Registraties</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Linkerkolom voor weergave van registraties -->
            <div class="col-md-6">
                <h2>Registraties Vandaag</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nr</th>
                            <th>Naam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Voorbeeld van een registratie -->
                        @foreach($registrations->where('created_at', '>=', \Carbon\Carbon::today()) as $person)
                        <tr>
                            <td>{{ $person->registration_id }}</td>
                            <td>{{ $person->first_name }} {{ $person->last_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Rechterkolom voor het registreren van nieuwe registraties -->
            <div class="col-md-6">
                <h2>Nieuwe Registratie</h2>
                <form method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="firstname">Voornaam:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Achternaam:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Registreer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>