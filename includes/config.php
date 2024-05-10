<?php
$site_email="info@example.com";
if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
$site_url=$protocol."://".$_SERVER['SERVER_NAME'];
?>