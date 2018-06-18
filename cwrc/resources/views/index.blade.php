<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CWRC</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

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
<div>
        <div style="margin-top: 2em" class="jumbotron">
                <h2>CWRC Ontologies</h2>
  <p class="lead">These are the ontologies developed by the Canadian Writing Research Collaboratory.</p>
</div>

                <table class="table">
        <thead>
            <tr>
                <th class="class">SPARQL Graph</th>
                <th class="class">Name</th>
                <th>Prefix</th>
                <th>Description</th>
                <th class="status">Version</th>
                <th>Status</th>
                <th>Size</th>
            </tr>
        </thead>
         <tbody>

            @foreach ($result as $row)
            
                <tr>
                    <td>{{ $row->graph }}</td>
                    <td><a href="{{ $row->graph }}.html">{{ $row->name }}</a></td>
                    <td>{{ $row->prefix }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->version }}</td>
                    <td>
                        @if ($row->status == "Testing")
                            <span class="badge badge-warning">{{ $row->status }}</span>
                        @elseif ($row-status == "Unstable")
                            <span class="badge badge-danger">{{ $row->status }}</span>
                        @else
                            <span class="badge badge-success">{{ $row->status }}</span>
                        @endif
                    </td>
                    <td>{{ is_int($row->entities) ? $row->entities : 0 }}</td>
                </tr>
            @endforeach 
        </tbody>
        </table>
        </div>

    </body>
</html>
