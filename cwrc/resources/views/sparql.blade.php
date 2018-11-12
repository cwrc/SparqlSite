@extends('layouts.mainlayout')

@section('main-content')

	<link href='//cdn.jsdelivr.net/npm/yasgui@2.7.29/dist/yasgui.min.css' rel='stylesheet' type='text/css'/>
<script src='//cdn.jsdelivr.net/npm/yasgui@2.7.29/dist/yasgui.min.js'></script>

        <div class="container">

            <div class="mt-5" id="yasgui"></div>

        <div>
        

    </body>

    <script>

        YASGUI.YASQE.Autocompleters._prefixes = YASGUI.YASQE.Autocompleters.prefixes;
	YASGUI.YASQE.Autocompleters.prefixes = function(yasqe, completerName) {
  	var completer = YASGUI.YASQE.Autocompleters._prefixes(yasqe, completerName);
  		completer.async = false;
  		completer.get = ["cwrc: <http://sparql.cwrc.ca/ontologies/cwrc#>"];
  		return completer;
	};
	var yasgui = YASGUI(document.getElementById("yasgui"), {endpoint: "{{ $endpoint }}"});

    </script>

@endsection
