<?php

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$Chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
 header('Location: https://api.whatsapp.com/send?phone=+8956037179#&text=I am connecting you through ezycrd! I am interested to know more about your product & services.');
 //OR
 echo "<script>window.location='https://api.whatsapp.com/send?phone=+8956037179#&text=I am connecting you through ezycrd! I am interested to know more about your product & services.'</script>";
}

// all others
else {
 header('Location: https://web.whatsapp.com/send?phone=+8956037179#&text=I am connecting you through ezycrd! I am interested to know more about your product & services.');
 //OR
 echo "<script>window.location='https://web.whatsapp.com/send?phone=+8956037179#&text=I am connecting you through ezycrd! I am interested to know more about your product & services.'</script>";
}
?>