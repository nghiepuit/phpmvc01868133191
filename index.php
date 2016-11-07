<?php

    require_once("define.php");
    function __autoload($className){
        $path = "libs/";
        require_once($path.$className.".php");
    }

	$bootstrap = new Bootstrap();

?>