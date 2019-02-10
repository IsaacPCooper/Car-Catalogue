<?php

$servername = "eu-cdbr-west-02.cleardb.net";
$dBUsername = "b34530846c940e";
$dBPassword = "5d27a577fc0dd95";
$dBName = "heroku_79520a90f820d21";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBPassword,$dBName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
