<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Arabia</title>
        <?= stylesheet_link_tag() ?>
    </head>
    <body>
        <div class="header">
            @section('header')
            @show
        </div>
        
        <div class="body">
            @yield('body')
        </div>

        <div class="footer">
            @section('footer')
            @show
        </div>

        <?= javascript_include_tag() ?>
    </body>
</html>