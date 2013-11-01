<?php
function checkSignature()
{
  $signature = $_GET["signature"];
  $timestamp = $_GET["timestamp"];
  $nonce = $_GET["nonce"];
  //var_dump($signature);

  $token = "leovim";
  $tmpArr = array($token, $timestamp, $nonce);
  sort($tmpArr);
  $tmpStr = implode($tmpArr);
  $tmpStr = sha1($tmpStr);

  if ($tmpStr == $signature) {
    return true;
  }
  else {
    return false;
  }
}
if (checkSignature()) 
  echo $_GET['echostr'];
else
  die();
?>
