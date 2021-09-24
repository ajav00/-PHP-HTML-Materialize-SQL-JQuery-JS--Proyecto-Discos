<?php
    spl_autoload_register(
        function ($clase)
        {
            require_once'clases/'.$clase.'.php';
        }
    );
?>