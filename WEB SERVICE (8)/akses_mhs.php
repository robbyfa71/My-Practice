<?php
$url = "http://localhost/PWD%20PRAK/My-Practice/WEB%20SERVICE%20(8)/getdatamhs.PHP";

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER,1);
$response=curl_exec($client);
$result = json_decode($response);
foreach($result as $r){
    echo "<p>";
    echo "NIM :".$r->nim."<br/>";
    echo "Nama :".$r->nama."<br/>";
    echo "Jenis Kelamin :".$r->jkel."<br/>";
    echo "Alamat :".$r->alamat."<br/>";
    echo "Tgl Lahir :".$r->tgllhr."<br/>";
    echo "</p>";
}
?>