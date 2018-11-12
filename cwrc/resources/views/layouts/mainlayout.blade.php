<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CWRC</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29631253-5"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-29631253-5');
</script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">CWRC SPARQL</a>
                <div class="navbar-nav mr-auto">
                        <li class="nav-item mr-active">
                                <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="sparql">CWRC SPARQL</a>
                        <li>
                        <li class="nav-item">
                                <a class="nav-link" href="ontology/cwrc.html">Documentation</a>
                        </li>
			<li class="nav-item">
				<a class="nav-link" href="/releasenotes">Release Notes</a>
			</li>
                </div>
        </nav>


        <div class="container mt-4">

	@yield('main-content')


	</div>
    </body>
</html>


	
