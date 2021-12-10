<?php

// __destruct(void):void

class Car{
    public $dbConnection;
    function __destruct()
    {
        mysqli_close($dbConnection);
    }
}

?>