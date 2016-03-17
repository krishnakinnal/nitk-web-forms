<?php

    include 'redirect.php' ;

    if(isset($_COOKIE['NITK']))
    {
        unset($_COOKIE['NITK']);
        setcookie('NITK', '', time() - 3600, '/');
        header($index);
        exit;
    }
    else
    {
        header($index);
        exit;
    }

?>