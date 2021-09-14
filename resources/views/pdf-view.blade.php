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

    <title>Pdf Reader</title>

  </head>

  <body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1><p class="font-weight-light">PDF View</p></h1>

                <a href="#" class="btn btn-primary btn-sm ml-3 click_info">
                    <i class="bi bi-pencil-square"></i>  Open Pdf Jquery
                </a>
                
                <br>
                <br>

                <a href="{{ asset('imgs/NACTAR.pdf') }}" class="btn btn-primary btn-sm ml-3">
                    <i class="bi bi-pencil-square"></i>  Open Pdf xJquery
                </a>
                <!--
                <object data="{{ asset('imgs/NACTAR.pdf') }}" type="application/pdf">
                    <embed src="{{ asset('imgs/NACTAR.pdf') }}" type="application/pdf" />
                </object>
                 -->

                <br>
                <br>
                 <div id='pdf_views'>
                    <object data="{{ asset('imgs/NACTAR.pdf') }}" type="application/pdf" width="70%" height="500">
                        <iframe src="https://docs.google.com/viewer?url=imgs/NACTAR.pdf&embedded=true"></iframe> <!-- url=your_url_to_pdf | it uses Google's PDF Viewer to display it as plain HTML if plugin not found: -->
                    </object>
                 </div>

            </div>
            <div class="col-3"></div>
        </div>
        <!--
        <div class="row justify-content-center">
            <iframe src="{{ asset('imgs/NACTAR.pdf') }}" width="50%" height="500">
                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('imgs/NACTAR.pdf') }}">Download PDF</a>
            </iframe>
        </div>
        -->

    </div>

    <script type="text/javascript">

        $(document).ready(function () {

            $('#pdf_views').hide();
            //var pdfFrame = document.getElementById('pdfFrame');

            $(document).on('click','.click_info', function (e) {
                e.preventDefault();

                $('#pdf_views').show();

            });
        
        });
        
    </script>

  </body>
</html>