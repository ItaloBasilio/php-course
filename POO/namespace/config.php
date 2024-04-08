<?php

spl_autoload_register(function($nameClass){

    // var_dump($nameClass);

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if(file_exists($filename)){

        require_once($filename);

    }
});

?>


<!-- <?php

// spl_autoload_register(function($className) {
//     require_once "class/" . str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
// });

?> -->
