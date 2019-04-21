<?php
function test_request($url){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $url
	));
	$retorno = curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	return ($httpcode>=200 && $httpcode<300);
}

$urls = ["https://sci-hub.tw/","https://sci-hub.cc","http://scihub22266oqcxt.onion.link/",
"https://sci-hub.io/","http://sci-hub.bz"];
foreach ($urls as $url) {
	if(test_request($url)){
		echo $url;
		return;
	}
	# code...
}
echo "Error";