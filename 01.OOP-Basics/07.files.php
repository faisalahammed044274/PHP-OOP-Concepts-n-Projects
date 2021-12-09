<?php

class Files{

    function displayContent($filename) : bool{
        $result = true;
    try{
        echo "Read the Content of the file: $filename" .PHP_EOL;
        $content = file_get_contents($filename);
        echo "Displaying Content of the file: $filename" . PHP_EOL;
        PHP_EOL;
        echo $content;
    } catch(Exception $e) {
        $result = false;
    }
        return $result;
    }
}

$files1 = new files();
$files1->displayContent("ex-test.html");

//OOP-brings-reusability-to-your-code
$files2 = new Files();
$files2->displayContent("test1.html");

?>