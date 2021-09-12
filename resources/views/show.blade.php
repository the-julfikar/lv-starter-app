<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--
    <style>
        .w-5{
            display: none
        }
    </style>
    -->
    <title>StarterApp-Show</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

   <div class="container" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Home</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a> <!-- nav-link active -->
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Notice</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Results</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Admission</a></li>
                </ul>
                </li>
                <!-- 
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
   </div>
    
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h1><center><p class="font-weight-light">Results</p></center></h1>
                <table class="table table-striped">
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
                            <th scope="col" style="text-align: center">Edit/Delete</th>
                            <!-- <th scope="col" style="text-align: center">Delete</th> -->
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
                            <!-- <td>{{ $l->sex }}</td> -->
                            <td align="center">
                                <!-- window.location -->
                                <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='{{ url("edit/" . $l->id) }}'">
                                    <i class="bi bi-pencil-square"></i>
                                </button>

                                <!-- 
                                <button type="button" class="btn btn-danger btn-sm ml-3">
                                    <i class="bi bi-scissors"></i>
                                </button>
                                -->
                                
                                <!-- Adding controller link to the edit/delete button -->
                                <a href={{ "delete/" . $l->id }} class="btn btn-danger btn-sm ml-3">
                                    <i class="bi bi-scissors"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
                {{-- Pagination --}}
                <div class="d-flex justify-content-center"> <!-- style="margin-bottom: 40px auto" -->
                    {!! $data->links() !!}
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
  </body>
</html>