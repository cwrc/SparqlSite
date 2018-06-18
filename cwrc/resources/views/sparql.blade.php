<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CWRC | SPARQL Endpoint</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <link href='//cdn.jsdelivr.net/npm/yasgui@2.7.27/dist/yasgui.min.css' rel='stylesheet' type='text/css'/>
        <script src='//cdn.jsdelivr.net/npm/yasgui@2.7.27/dist/yasgui.min.js'></script>

    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">CWRC SPARQL</a>
                <div class="navbar-nav mr-auto">
                        <li class="nav-item mr-active">
                                <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="sparql">CWRC SPARQL</a>
                        <li>
                        <li class="nav-item">
                                <a class="nav-link" href="ontology/cwrc.html">Documentation</a>
                        </li>
                </div>
        </nav>


        <div class="container">

            <div class="mt-5" id="yasgui"></div>

        <div>
        

    </body>

    <script>

        var yasgui = YASGUI(document.getElementById("yasgui"));
    </script>
</html>
