<?php
error_reporting(0);
class ytauto{
	
public $cahneid;	
public $cookie;



public function tara(){
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/youtubei/v1/browse?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
  "context": {
    "client": {
      "hl": "tr",
      "gl": "TR",
      "remoteHost": "212.252.140.136",
      "deviceMake": "",
      "deviceModel": "",
      "visitorData": "Cgs0ZkgzUlhaOWM5WSir-MOUBg%3D%3D",
      "userAgent": "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36,gzip(gfe)",
      "clientName": "WEB",
      "clientVersion": "2.20220526.00.00",
      "osName": "Windows",
      "osVersion": "6.3",
      "originalUrl": "https://www.youtube.com/user/prototurk/about",
      "platform": "DESKTOP",
      "clientFormFactor": "UNKNOWN_FORM_FACTOR",
      "configInfo": {
        "appInstallData": "CIz9w5QGENSDrgUQuIuuBRCXl64FELfLrQUQgo6uBRCUj64FEJiHrgUQmN79EhCY6q0FEMvo_RIQkfj8EhDYvq0F"
      },
      "timeZone": "Europe/Istanbul",
      "browserName": "Chrome",
      "browserVersion": "102.0.5005.62",
      "screenWidthPoints": 1366,
      "screenHeightPoints": 568,
      "screenPixelDensity": 1,
      "screenDensityFloat": 1,
      "utcOffsetMinutes": 180,
      "userInterfaceTheme": "USER_INTERFACE_THEME_LIGHT",
      "memoryTotalKbytes": "4000000",
      "mainAppWebInfo": {
        "graftUrl": "/user/prototurk/about",
        "pwaInstallabilityStatus": "PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED",
        "webDisplayMode": "WEB_DISPLAY_MODE_BROWSER",
        "isWebNativeShareAvailable": false
      }
    },
    "user": {
      "lockedSafetyMode": false
    },
    "request": {
      "useSsl": true,
      "internalExperimentFlags": [],
      "consistencyTokenJars": []
    },
    "clickTracking": {
      "clickTrackingParams": "CC8Q8JMBGAwiEwjDxd6Aj4D4AhWY0xEIHWnhAug="
    },
    "adSignalsInfo": {
      "params": [
        {
          "key": "dt",
          "value": "1653668892303"
        },
        {
          "key": "flash",
          "value": "0"
        },
        {
          "key": "frm",
          "value": "0"
        },
        {
          "key": "u_tz",
          "value": "180"
        },
        {
          "key": "u_his",
          "value": "4"
        },
        {
          "key": "u_h",
          "value": "768"
        },
        {
          "key": "u_w",
          "value": "1366"
        },
        {
          "key": "u_ah",
          "value": "728"
        },
        {
          "key": "u_aw",
          "value": "1366"
        },
        {
          "key": "u_cd",
          "value": "24"
        },
        {
          "key": "bc",
          "value": "31"
        },
        {
          "key": "bih",
          "value": "568"
        },
        {
          "key": "biw",
          "value": "1350"
        },
        {
          "key": "brdim",
          "value": "0,0,0,0,1366,0,1366,728,1366,568"
        },
        {
          "key": "vis",
          "value": "1"
        },
        {
          "key": "wgl",
          "value": "true"
        },
        {
          "key": "ca_type",
          "value": "image"
        }
      ],
      "bid": "ANyPxKoOB29Q_vAW-nOiAfXvxXZkfZV71GA1wATgXILf7mPkFO9NsLpybefY1g56U_0WlFiPMXM-bX-XKcUfwWK38eIVUvA3Pw"
    }
  },
  "browseId": "'.$this->cahneid.'",
  "params": "EgVhYm91dA%3D%3D"
}');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = array();
$headers[] = 'Authority: www.youtube.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Cookie: '.$this->cookie.'';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36';
$headers[] = 'X-Client-Data: CIm2yQEIorbJAQjBtskBCKmdygEIydLKAQjn88oBCJWhywEI2+/LAQjmhMwBCK6rzAEIpa/MAQiXsswBGKupygE=';
$headers[] = 'Authorization: SAPISIDHASH 1653668313_f9047a4429c96af746bb7ce1e04b986fbe3703ea';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://www.youtube.com';
$headers[] = 'Referer: https://www.youtube.com/user/prototurk/about';
$headers[] = 'X-Goog-Authuser: 0';
$headers[] = 'X-Goog-Pageid: undefined';
$headers[] = 'X-Goog-Visitor-Id: Cgs0ZkgzUlhaOWM5WSio8cOUBg%3D%3D';
$headers[] = 'Range: bytes=0-6635';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$sonuc = json_decode($result, true);
$bio = $sonuc['contents']['twoColumnBrowseResultsRenderer']['tabs']['5']['tabRenderer']['content']['sectionListRenderer']['contents']['0']['itemSectionRenderer']['contents']['0']['channelAboutFullMetadataRenderer']['description']['simpleText'];
//print_r($bio);
$ex = explode(" ", $bio);
foreach($ex as $xe){
	$a = $this->getMail($xe);
	$respmail = $a[0][0];
echo $respmail;
	$myfile = fopen("maillist.txt", "a") or die("Dosya Olusturulmadı PHP Surumu ile alakalı olabilir!");
$txt = "$respmail\r\n";
fwrite($myfile, $txt);
fclose($myfile);
}
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
}

public function getID($char){
	
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/youtubei/v1/search?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8&prettyPrint=false');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"context\":{\"client\":{\"hl\":\"tr\",\"gl\":\"TR\",\"remoteHost\":\"212.252.141.180\",\"deviceMake\":\"\",\"deviceModel\":\"\",\"visitorData\":\"CgtXUXJGcjBYemhJOCjZ3ZGWBg%3D%3D\",\"userAgent\":\"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36,gzip(gfe)\",\"clientName\":\"WEB\",\"clientVersion\":\"2.20220701.01.00\",\"osName\":\"Windows\",\"osVersion\":\"6.3\",\"originalUrl\":\"https://www.youtube.com/results?search_query=haluk\",\"platform\":\"DESKTOP\",\"clientFormFactor\":\"UNKNOWN_FORM_FACTOR\",\"configInfo\":{\"appInstallData\":\"CNndkZYGENDy_RIQmN79EhDUg64FEK6ergUQuIuuBRC3y60FEPTGrQUQmfT9EhDYvq0FEJH4_BI%3D\"},\"timeZone\":\"Europe/Istanbul\",\"browserName\":\"Chrome\",\"browserVersion\":\"103.0.0.0\",\"screenWidthPoints\":1366,\"screenHeightPoints\":625,\"screenPixelDensity\":1,\"screenDensityFloat\":1,\"utcOffsetMinutes\":180,\"userInterfaceTheme\":\"USER_INTERFACE_THEME_LIGHT\",\"memoryTotalKbytes\":\"4000000\",\"mainAppWebInfo\":{\"graftUrl\":\"/results?search_query=haluk\",\"pwaInstallabilityStatus\":\"PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED\",\"webDisplayMode\":\"WEB_DISPLAY_MODE_BROWSER\",\"isWebNativeShareAvailable\":false}},\"user\":{\"lockedSafetyMode\":false},\"request\":{\"useSsl\":true,\"internalExperimentFlags\":[],\"consistencyTokenJars\":[]},\"clickTracking\":{\"clickTrackingParams\":\"CB4Q7VAiEwiH5r-jneL4AhVBhVUKHW4pAuU=\"},\"adSignalsInfo\":{\"params\":[{\"key\":\"dt\",\"value\":\"1657040599073\"},{\"key\":\"flash\",\"value\":\"0\"},{\"key\":\"frm\",\"value\":\"0\"},{\"key\":\"u_tz\",\"value\":\"180\"},{\"key\":\"u_his\",\"value\":\"15\"},{\"key\":\"u_h\",\"value\":\"768\"},{\"key\":\"u_w\",\"value\":\"1366\"},{\"key\":\"u_ah\",\"value\":\"728\"},{\"key\":\"u_aw\",\"value\":\"1366\"},{\"key\":\"u_cd\",\"value\":\"24\"},{\"key\":\"bc\",\"value\":\"31\"},{\"key\":\"bih\",\"value\":\"625\"},{\"key\":\"biw\",\"value\":\"1350\"},{\"key\":\"brdim\",\"value\":\"0,0,0,0,1366,0,1366,728,1366,625\"},{\"key\":\"vis\",\"value\":\"1\"},{\"key\":\"wgl\",\"value\":\"true\"},{\"key\":\"ca_type\",\"value\":\"image\"}],\"bid\":\"ANyPxKo-f7UndBEdXrYpB0bzus28y--zr2_5WDszJe_c8hk5p8jQCgFqHtlVwjM3h188m6GRUnduAWnFTjDxhcp7KjTzWF4Xdg\"}},\"query\":\"$char\",\"webSearchboxStatsUrl\":\"/search?oq=haluk&gs_l=youtube.3..35i39k1j0i512i433k1j0i512i433i131k1j0i512i433k1l3j0i512i433i131k1j0i512i433k1l4j0i512i433i131k1j0i512i433k1l2.78878.79511.0.79680.7.6.1.0.0.0.289.988.0j3j2.6.0.qscte,ytpo-bo-me=1,ytposo-bo-me=1,ytpo-bo-ei=45358233,ytposo-bo-ei=45358233,cfro=1,ytpo-bo-me=0,ytposo-bo-me=0,ytpo-bo-ei=45351862,ytposo-bo-ei=45351862.2..0...1ac.1.64.youtube..0.7.1271.10..35i362i39k1j35i362i39i395k1j0i229i433i131k1j0i471i433i131i395k1j0i471i433i395k1j0i389i395k1j0i389k1j0i512i433i131i395k1j0i512i433i395k1.268.aDyZDz8YYKU\"}");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$headers = array();
$headers[] = 'Authority: www.youtube.com';
$headers[] = 'Accept: */*';
$headers[] = 'Accept-Language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Authorization: SAPISIDHASH 1657040817_28b8483d859fa085886725440aca6b148baeb6ef';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Cookie: '.$this->cookie.'';
$headers[] = 'Origin: https://www.youtube.com';
$headers[] = 'Referer: https://www.youtube.com/c/prototurk';
$headers[] = 'Sec-Ch-Ua: \".Not/A)Brand\";v=\"99\", \"Google Chrome\";v=\"103\", \"Chromium\";v=\"103\"';
$headers[] = 'Sec-Ch-Ua-Arch: \"x86\"';
$headers[] = 'Sec-Ch-Ua-Bitness: \"64\"';
$headers[] = 'Sec-Ch-Ua-Full-Version: \"103.0.5060.66\"';
$headers[] = 'Sec-Ch-Ua-Full-Version-List: \".Not/A)Brand\";v=\"99.0.0.0\", \"Google Chrome\";v=\"103.0.5060.66\", \"Chromium\";v=\"103.0.5060.66\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Model: ';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Sec-Ch-Ua-Platform-Version: \"0.3.0\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: same-origin';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36';
$headers[] = 'X-Client-Data: CIm2yQEIorbJAQjBtskBCKmdygEI5/PKAQiUocsBCNvvywEIg7TMAQiFtMwBCJa2zAEI6rnMAQi1uswBCPm6zAEYq6nKAQ==';
$headers[] = 'X-Goog-Authuser: 1';
$headers[] = 'X-Goog-Visitor-Id: CgtXUXJGcjBYemhJOCjZ3ZGWBg%3D%3D';
$headers[] = 'X-Origin: https://www.youtube.com';
$headers[] = 'X-Youtube-Bootstrap-Logged-In: true';
$headers[] = 'X-Youtube-Client-Name: 1';
$headers[] = 'X-Youtube-Client-Version: 2.20220701.01.00';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$sonuc = json_decode($result, true);
$channels = $sonuc['contents']['twoColumnSearchResultsRenderer']['primaryContents']['sectionListRenderer']['contents']['0']['itemSectionRenderer']['contents'];
$i = 0;
while($i < 20){
	try{
	$chsx = $channels[$i]['videoRenderer']['channelThumbnailSupportedRenderers']['channelThumbnailWithLinkRenderer']['navigationEndpoint']['browseEndpoint']['browseId'];
	}catch (Exception $e) {
  echo 'Yakalanan olağandışılık: ',  $e->getMessage(), "\n";
	}
	$i = $i + 1;
	$fotlook = "https://www.youtube.com/channel/";
	$forsave = $gelen.$fotlook.$chsx.PHP_EOL;
	$gelen = $gelen.$chsx.PHP_EOL;
}
$myfile = fopen("channellist.txt", "a") or die("Dosya Olusturulmadı PHP Surumu ile alakalı olabilir!");
$txt = "$forsave\r\n";
fwrite($myfile, $txt);
fclose($myfile);
return $gelen;
	
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

}
public function edit($text){
	$editable = array("

", "
", "


", "



");
	$a = str_replace($editable, "
", $text);
return $a;
	
}

public function getMail($str){
	$re = '/^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/m';


preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
if(is_null($matches[0])){
			$sonuc = "";
	return $sonuc;
}else{

	return $matches;

}
}


}
