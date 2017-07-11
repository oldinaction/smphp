<?php
function openu($url){
	$url = eregi_replace('^http://', '', $url);
	$temp = explode('/', $url);
	$host = array_shift($temp);
	$path = '/'.implode('/', $temp);
	$temp = explode(':', $host);
	$host = $temp[0];
	$port = isset($temp[1]) ? $temp[1] : 80;

	$fp = @fsockopen($host, $port, &$errno, &$errstr, 30);
	if ($fp)
	{
	@fputs($fp, "GET $path HTTP/1.1\r\n");
	@fputs($fp, "Host: $host\r\n");
	@fputs($fp, "Accept: */*\r\n");
	@fputs($fp, "Referer: http://$host/\r\n");
	@fputs($fp, "User-Agent: TTMobile/09.03.18/symbianOS9.1 Series60/3.0 Nokia6120cAP3.03\r\n");
	@fputs($fp, "Connection: Close\r\n\r\n");
	}

	$Content = '';
	while ($str = @fread($fp, 4096))
	$Content .= $str;
	@fclose($fp);

	return $Content;
}
?>