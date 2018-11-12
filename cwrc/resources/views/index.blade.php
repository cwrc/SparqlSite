@extends('layouts.mainlayout')

@section('main-content')

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
	@if (property_exists($row, "entities")) 
                    <td>{{ $row->entities }}</td>
	@else
		<td></td>
	@endif
                </tr>
            @endforeach 
        </tbody>
        </table>
        </div>

@endsection
