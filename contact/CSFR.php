<?php
function store_in_session($key,$value) {
	if (isset($_SESSION))
	{
		$_SESSION[$key]=$value;
	}
}
function unset_session($key){
	$_SESSION[$key]=' ';
	unset($_SESSION[$key]);
}
function get_from_session($key) {
	if (isset($_SESSION[$key]))
	{
		return $_SESSION[$key];
	}
	else {  return false; }
}

function csrfguard_generate_token($unique_form_name) {
	if (function_exists("hash_algos") and in_array("sha512",hash_algos())) {
		$token=hash("sha512",mt_rand(0,mt_getrandmax()));
	} else {
		$token=' ';
		for ($i=0;$i<128;++$i) {
			$r=mt_rand(0,35);
			if ($r<26) {
				$c=chr(ord('a')+$r);
			} else {
				$c=chr(ord('0')+$r-26);
			}
			$token.=$c;
		}
	}
	store_in_session($unique_form_name,$token);
	return $token;
}
function csrfguard_validate_token($unique_form_name,$token_value) {
	$token=get_from_session($unique_form_name);
	if ($token === $token_value) {
		$result=true;
	}
	else
	{
		$result=false;
	}
	unset_session($unique_form_name);
	return $result;
}
?>
