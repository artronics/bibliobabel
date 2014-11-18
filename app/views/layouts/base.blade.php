<!doctype html>
<html lang="en-US">
<head>
    {{--here we'll fake php variables which is not already defined
        like title
      TODO: it doesn't work. the temporary way is using a statement like this
      {{{$pageTitle or 'Default'}}}--}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('stylesheets')
    @yield('scripts')

    <title>{{{$pageTitle or 'Bibliobabel'}}}</title>

</head>
<body>
    @yield('body')
    @yield('footer_scripts')
</body>
</html>