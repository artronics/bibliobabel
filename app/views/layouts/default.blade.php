<!--
/*
 *The basic defualt HTML structure which
 *applies to every pages.
 *Every pages extends this layout
 */
 -->
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title></title>

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- You need extra stylesheets? fill override this section
    DO NOT FORGET to add @parent if you also need this stylesheet along side your own -->
    @section('stylesheets')
        <link href="/css/home.css" rel="stylesheet">
    @show
</head>
<body>
    <div class="container-fluid costum-container">
        @yield('container-fluid')

        <!-- This yield is for test purpose. extend it to whatever file you want -->
        <div class="row test">
            <div class="col-md-6 col-md-offset-3">
                @yield('test-content')
            </div>
        </div>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- You need extra scripts? fill section to this yield! -->
    @yield('scripts')
</body>
</html>
