<?php
$Camera_IP = "192.168.1.108";
$Camera_Port = "80";
$Camera_Username = "admin";
$Camera_Password = "admin";
$Camera_Pre_url = "http://";
$Load_Interval = 2000;

$output_Image_Width = 500; // output image width size in px
$output_Image_height = 400; // output image height size in px


$url = $Camera_Pre_url . $Camera_IP . ":" . $Camera_Port . "/cgi-bin/snapshot.cgi";


?>