<?php
// 1) Write File Class
// 2) Pass the filename to Constructor
// 3) Check if the file exists in constructor
// 4) If file is found then open the file using fopen method
// 5) Write method getContent to get the content of the file
// 6) Write Destructor method to close the file if file is already opened. -->


class Files{

    public $fileName;
    public $fileHandler = null;
    public $fileSize;
    public $content;
    public $fileFound = false;


    function __construct($fileName){
            $this->fileName = $fileName;
            //Check if the file exists
            if(file_exists($fileName)){
                //Is this a file?
                if(is_file($fileName)){
                    $this->fileFound = true;
                }

            }

            if($this->fileFound){
                //Open a File
                $this->fileHandler = fopen($fileName,"r");
                $this->fileSize = filesize($fileName);
            }


    }

    function getContent() :string{
        if($this->fileFound){
            $content = fread($this->fileHandler,$this->fileSize);
            return $content;
        } else{
            return "No files found";
        }
    }

    function __destruct()
    {
        if($this->fileFound){
            fclose($this->fileHandler);
            echo "File is closed from destructor" . PHP_EOL;
        }
    }
}

$file1 = new Files("test.txt");
echo $file1->getContent();