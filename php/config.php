<?php

if(strpos($_SERVER['SERVER_NAME'], 'localhost') !== false){
	//---- SEO Path settings-----
  // define('S_EZYCRDPATH', 'https://www.ezycrd.com/');
  define('S_DOMAINPATH','http://localhost/eventmanager-Ezycard/');
  define('S_ROOTPATH', '/xampp/htdocs/eventmanager-Ezycard/');
  define('S_IMGPATH',S_DOMAINPATH.'images/');
  define('S_CSSPATH', S_DOMAINPATH . 'css/'); 
  define('S_JSPATH',S_DOMAINPATH.'js/');
  define('S_INCLUDESPATH',S_ROOTPATH.'php/');

}
?>
