<!DOCTYPE html>
<html style="height: 100% !important;">
<head>
	<meta charset="utf-8">
	<title>
		PAPA - @yield('title')
	</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(250, 0).slideUp(250, function(){
                $(this).remove();
            });
        }, 2500);
    </script>

    @yield('estilo_personalizado')
</head>
<!--<body style="margin-top: 50px; height: auto; background-color: #1b70f9;">-->
<body style="margin-top: 50px; height: 100%; background-color: #1b70f9;">
    @component('layouts.navbar.navbar')
    @endcomponent
    <div style="background-color: #1b70f9; height: 100%;">
        <!--<div class="container" style="background-color: white; height: 100%;">-->
        <div class="container" style="background-color: white; height: 100% !important; padding: 0;">
            <div class="container" style="background-color: white; height: auto !important;">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>

            <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
            </script>
        </div>
    </div>
</body>

