<?php

class Posts{

    function __construct(){
        
        //Initialize the value
        echo "This is Constructor" . PHP_EOL . "<br>";
    }

    function __destruct(){

        //Close the connection or empty the space.
        echo "This is Destructor" . PHP_EOL;
    }

}

$post1 = new Posts();
