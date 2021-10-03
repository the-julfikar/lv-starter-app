<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>lv-app-tabs</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


   <div class="container" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid shadow p-2 mb-1 bg-white">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="#">Register</a>
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
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
   </div>
    
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 shadow p-4 mb-4 bg-white">

                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li> <!-- class="nav-link disabled" -->
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li>
                </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h1>Basic Info</h1>
                        <!-- <form action="" method="POST"> -->
                            {{-- @csrf --}}
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" name="fullname">
                            </div>
                            <br>
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
                            <button type="submit" class="btn btn-secondary step1">Next</button>
                        <!-- </form> -->
                    </div>


                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h1>This is 2ndary Info</h1>
                        <!-- <form action="" method="POST"> -->
                            {{--@csrf--}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Department</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="dept">
                                <option>Select dept.</option>
                                <option>EEE</option>
                                <option>CSE</option>
                                <option>ECE</option>
                                <option>ETE</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address"></textarea>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <label>Jobs: </label>
                                </div>
                                <div class="col-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="jobs">
                                        <label class="form-check-label" for="inlineCheckbox1">Govt.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="jobs">
                                        <label class="form-check-label" for="inlineCheckbox2">Private</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-2">
                                    <label>Sex: </label>
                                </div>
                                <div class="col-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="option1"> <!-- inlineRadioOptions -->
                                        <label class="form-check-label" for="inlineRadio1">Mr.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Mrs.</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Others.</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-secondary step2">Next</button>
                        <!-- </form> -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h1>This is Khan</h1>
                    </div>
                  </div>
            
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {

            //$('#home-tab').addClass('disabled');
            //$('#profile-tab').addClass('disabled');
            //$('#contact-tab').addClass('disabled');

            $(document).on('click','.step1', function (e) {
                //e.preventDefault();
                $("#profile-tab").tab('show');
                //$('#profile-tab').addClass('active');
                $('#home').addClass('disabled');
                //$('#home-tab').addClass('disabled');


                
            });

            $(document).on('click','.step2', function (e) {
                //e.preventDefault();
                $("#contact-tab").tab('show');
            });
        
        });
        
    </script>

  </body>
</html>