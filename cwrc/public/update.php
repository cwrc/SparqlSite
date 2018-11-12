<?php
// if ($_GET["key"] == "rerun") {
  $valid = `/home/www-data/p_validateOntology.py`;
  //$valid = `/home/www-data/validateOntology.sh`;
  if ($valid == null) {
    shell_exec("/home/www-data/updateOntology.sh");
  echo "help";

  } else {
    //API URL
    $url = 'https://api.github.com/repos/cwrc/ontology/issues?access_token=6746512dc0cf612bfc83dfc53ee8a34db87ef932';
    //create a new cURL resource
    $ch = curl_init($url);
    
    /*$valid= str_replace("'", '"', $valid);
    $valid= str_replace("\n", '\\n', $valid);
    $valid = rtrim($valid,"\\n\\n");*/
    $payload = $valid;
echo $valid;
    curl_setopt($ch,CURLOPT_USERAGENT,'CWRC ONTOLOGY Bot validating xml');
    
    //attach encoded JSON string to the POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
    //set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
    //return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    //execute the POST request
    $result = curl_exec($ch);
    echo $result; 
    //close cURL resource
    curl_close($ch);
	}
//}

?>

