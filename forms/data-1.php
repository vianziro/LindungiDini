<?php
function bacaURL($url){
     $session = curl_init(); // buat session
     // setting CURL
     curl_setopt($session, CURLOPT_URL, $url);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($session);
     curl_close($session);
     return $hasil;
}
$sumber =  bacaURL('https://corona.banyuwangikab.go.id/');
$ambil_kata = explode('<h2 class="jml_angka semua odr">', $sumber);
$ambil_kata_lagi = explode('</h2>', $ambil_kata[1]);
echo $ambil_kata_lagi[0];
?>