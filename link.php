<?php
// https://lp.nrmn.top/api/bypass?url=

class bypass{

    var string $url;

    function url(){
        $enc = base64_encode($this->url);

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"https://lp.nrmn.top/api/bypass?url=$enc");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $resukt = curl_exec($ch);
        $json = json_decode($resukt,1);

        echo "Link $this->url : ".$json["url"];
    }
}

$by = new bypass();
echo "
@author : M31337
@date : Wednesday, July 14, 2021, 19:50
" . PHP_EOL;
if (!isset($argv[1]))
{
    echo "* use link.php https://example.com";
    exit(1);
} else
{
    $link = $argv[1];
}

$by->url = $link;
$by->url();