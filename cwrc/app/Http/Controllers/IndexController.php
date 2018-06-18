<?php

namespace App\Http\Controllers;


use EasyRdf\Sparql\Client;

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
		}  }"
    );


    return view('index', ['result' => $result]);

	}


	public function sparql() {

		return view('sparql');

	}


}