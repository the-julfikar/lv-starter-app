Pdf: dompdf


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>PDF-lvApp</title>

    <style>
    table, th, td {
        padding: 5px;
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>

</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <table style="margin-top: 20px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Passwd</th>
                <th>Email</th>
                <th>Dept.</th>
                <th>Address</th>
                <th>Jobs</th>
                <th>Sex</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $l)
                <tr>
                    <th>{{ $l['id'] }}</th>
                    <td>{{ $l['fullname'] }}</td>
                    <td>{{ $l['passwd'] }}</td>
                    <td>{{ $l['email'] }}</td>
                    <td>{{ $l['dept'] }}</td>
                    <td>{{ $l['address'] }}</td>
                    <td>{{ $l['jobs'] }}</td>
                    <td>{{ $l['sex'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center">
                <img src="{{ url('ruet-hd.png') }}" width="90" height="80" alt="RUET">
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row text-center" style="margin-top: 15px">
            <div class="col-1"></div>
            <div class="col-10">
                <h1><p class="lead">Results of Employee</p></h1>
                <p class="h6">ICT Cell | RUET</p>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row" style="margin-top: 15px">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Passwd</th>
                            <th>Email</th>
                            <th>Dept.</th>
                            <th>Address</th>
                            <th>Jobs</th>
                            <th>Sex</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach($data as $l)
                            <tr>
                                <th>{{ $l['id'] }}</th>
                                <td>{{ $l['fullname'] }}</td>
                                <td>{{ $l['passwd'] }}</td>
                                <td>{{ $l['email'] }}</td>
                                <td>{{ $l['dept'] }}</td>
                                <td>{{ $l['address'] }}</td>
                                <td>{{ $l['jobs'] }}</td>
                                <td>{{ $l['sex'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</body>

</html>
