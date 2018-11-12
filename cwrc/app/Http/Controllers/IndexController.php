<?php

namespace App\Http\Controllers;


use EasyRdf\Sparql\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller {
	

	public function index() {

		$client = new Client(env("SPARQL_ENDPOINT"));

		$result = $client->query(
  	"SELECT ?graph ?uri ?name ?description ?status ?version ?prefix ?entities  WHERE { GRAPH ?graph {
			?uri <http://www.w3.org/1999/02/22-rdf-syntax-ns#type> <http://www.w3.org/2002/07/owl#Ontology> .
   		OPTIONAL {?uri <http://purl.org/dc/terms/description>  ?description . }
   		OPTIONAL {?uri <http://www.w3.org/2002/07/owl#versionInfo> ?version .}
   		OPTIONAL {?uri <http://xmlns.com/foaf/0.1/name> ?name . }
   		OPTIONAL {?uri <http://rdfs.org/ns/void#inDataset> ?dataset .
             ?dataset <http://rdfs.org/ns/void#entities> ?entities . }
   		OPTIONAL {?uri <http://www.w3.org/2003/06/sw-vocab-status/ns#term_status> ?status .}
   		OPTIONAL {?uri <http://purl.org/vocab/vann/preferredNamespacePrefix> ?prefix . }
  		filter (lang(?description) = 'en')
  		filter (lang(?name) = 'en')
		}  } ORDER BY ?prefix"
    );


    return view('index', ['result' => $result]);

	}


	public function sparql(Request $request) {

		$contentType = $request->header('content-type', False);
		$accept = $request->header('accept', 'application/json');
		if ($request->isMethod('post') && $contentType != "application/sparql-query") {
			$query = $request->input('query');
			return $this->performQuery($query, $accept);
		}


		if ($contentType == "application/sparql-query") {
			$query = $request->input('query', $request->getContent());
			return $this->performQuery($query, $accept);
		}

		return view('sparql', ['endpoint' => URL::current()]);

	}

	public function curlInit($payload, $accept, $method="application/sparql-query") {

		$req = curl_init();
		$url = env('SPARQL_ENDPOINT');

		curl_setopt($req, CURLOPT_URL, $url);
		curl_setopt($req, CURLOPT_POST, true);
		curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($req, CURLOPT_HTTPHEADER, [
		    "Content-Type:$method",
		    "Accept:$accept"
		]);
		curl_setopt($req, CURLOPT_POSTFIELDS, $payload);

		return $req;

	}

	public function performQuery($query, $accept) {

		$curlReq = $this->curlInit($query, $accept);

		$result = curl_exec($curlReq);

		return response($result);

		return response()->json(json_decode($result));

	}



}
