<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"); -->

    <title>lv-app-icons</title>
  </head>

  <body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

   <div class="container" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">RUET Automation</a> -->
            <a class="navbar-brand" href="#">
                <img src="{{url('/imgs/ruet-hd.png')}}"  width="50" height="35" alt="RUET">
                <!-- <img src="{{url('/imgs/ruet.svg')}}"  width="50" height="35" alt="RUET"> --> <!-- class="d-inline-block align-top" -->
                RUET Automation
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- me-auto : ms-auto | style="margin-left: auto" -->
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Login</a> <!-- nav-link active -->
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu Corner
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Notice</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Admission</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Results</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn btn-outline-success me-2" type="submit">Admin Console</button> <!-- Search -->
                    <button class="btn btn-outline-success" type="submit">Instructions</button>
                </form>
                
            </div>
        </div>
    </nav>
   </div>
    
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <h1><center><p class="font-weight-light">Registration Iconic</p></center></h1>
            <form action="registration" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="fullname">
                </div>
                </br>
                <div class="input-group mb-3"> <!-- Iconic Textbox : Added -->
                    <div class="input-group-prepend">
                        <!--
                        <span class="input-group-text" id="basic-addon1">@</span> 
                        <i class="bi bi-person-circle" style="font-size: 2rem"></i>
                        <span class="bi bi-person-square"></span>
                         -->
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span> 
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Department</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="dept"> <!-- form-control -->
                    <option>Select dept.</option>
                    <option>EEE</option>
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>ETE</option>
                    </select>
                </div>
                <br>
                <div class="input-group mb-3"> <!-- Custom Select : Added -->
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="form-control custom-select" id="inputGroupSelect01"> <!-- custom-select | form-control -->
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary" style="width: 100%">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
  </body>
</html>