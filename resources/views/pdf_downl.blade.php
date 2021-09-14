<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>PDF Downloader-lvApp</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <div class="container" style="margin-top: 80px">

        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <!-- <div class="card text-center"> -->
                <div class="card">
                    <!--
                    <div class="card-header">
                            <h5 class="text-center">
                                Results of ICT Cell
                                <a href={{ "/pdf-gen" }} class="btn btn-secondary float-end btn-sm">Download PDF</a>
                            </h5>    
                    </div>
                    -->
                    <!-- <h5 class="card-header">Results of ICT Cell</h5> -->
                    <div class="card-body lead">
                        <!--
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        -->
                                             <!-- striped -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Passwd</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Dept.</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Jobs</th>
                                    <th scope="col">Sex</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach($data as $l)
                                    <tr>
                                        <th scope="row">{{ $l['id'] }}</th>
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
                    <!--
                    <div class="card-footer text-muted text-center">
                        Developed by: Md. Julfikar Islam Khan
                    </div>
                    -->
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

</body>

</html>