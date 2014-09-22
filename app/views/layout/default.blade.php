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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- You need extra stylesheets? fill section to this yield! -->
    @yield('stylesheets')
</head>
<body>
    <div class="container-fluid costum-container">
        @yield('container-fluid')

        <!-- This yield is for test purpose. extend it to whatever file you want -->
        @yield('testContent')
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- You need extra scripts? fill section to this yield! -->
    @yield('scripts')
</body>
</html>
