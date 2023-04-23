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
                <h2>Weergave van Registraties</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Email</th>
                            <th>Telefoon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Voorbeeld van een registratie -->
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>0123456789</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Rechterkolom voor het registreren van nieuwe registraties -->
            <div class="col-md-6">
                <h2>Nieuwe Registratie</h2>
                <form>
                    <div class="form-group">
                        <label for="naam">Naam:</label>
                        <input type="text" class="form-control" id="naam">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="telefoon">Telefoon:</label>
                        <input type="tel" class="form-control" id="telefoon">
                    </div>
                    <button type="submit" class="btn btn-primary">Registreer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>