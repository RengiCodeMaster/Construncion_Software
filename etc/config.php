<?php
 $_urlBase = "http://Construncion_Software.test/";
 $host='127.0.0.1';
 $namedb='dbsistema';
 $userdb= 'root';
 $passworddb='';

 function get_UrlBase($arg1)
{
    return $GLOBALS['_urlBase'] . $arg1;
}

function get_views($arg1)
{
    return $GLOBALS['_urlBase'] . 'views/' . $arg1;
}

function get_models($arg1)
{
    return $GLOBALS['_urlBase'] . 'models/connect/' . $arg1;
}

function get_controllers($arg1)
{
    return $GLOBALS['_urlBase'] . 'controllers/' . $arg1;
}
function get_img($arg1)
{
    return $GLOBALS['_urlBase'] . 'img/' . $arg1;
}

?>
