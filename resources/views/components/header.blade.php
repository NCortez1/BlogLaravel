<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset=UTF-8>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset("/css/bootstrap.min.css") }}">
        <script src="{{ asset("js/jquery.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/bootstrap.min.js") }}" type="text/javascript"></script>

    </head>
    <body>
        <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #222;" id="navbar">
                    <a class="navbar-brand" style="margin-left:20px;" href="#">Blog</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!-- Menus  -->
                    </div>
                
                    <div>
                        <span class="navbar-text" style="margin-right:50px;">{{ auth()->user()->name }}</span>
                        <button onclick="location.href ='{{ route('logout') }}';" class="btn btn-danger" style="margin-right:20px;">
                            Salir
                        </button>
                    </div>
            </nav>
        </div>
        <br> 
        <br>
        <div class="container">