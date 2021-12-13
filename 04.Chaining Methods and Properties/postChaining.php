<?php


class Posts
{
    public $content;

    function __construct($content){
        echo "This is Constructor!" . PHP_EOL ."<br>";
        $this->content = $content;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL . "<br>";
    }

    function printContent1(){

        echo $this->content . PHP_EOL;
        return $this;
    }
    function printContent2(){

        echo $this->content . PHP_EOL;
        return $this;
    }
    function printContent3(){

        echo $this->content . PHP_EOL;
        return $this;
    }
    function printContent4(){

        echo $this->content . PHP_EOL;
        return $this;
    }

}
echo "one :" . "<hr>";
$post1 = new Posts("This is a post Content 1" . "<br>");
//Print and Get the $content property from the $post1 at the same time.
$content = $post1->printContent1()->content;
echo "Two :" . "<hr>";
$post2 = new Posts("This is a post Content 2" . "<br>");
//Print and Get the $content property from the $post1 at the same time.
$content = $post2->printContent2()->content;
echo "Three :" . "<hr>";
$post3 = new Posts("This is a post Content 3" . "<br>");
//Print and Get the $content property from the $post1 at the same time.
$content = $post3->printContent3()->content;
echo "Four :" . "<hr>";
$post4 = new Posts("This is a post Content 4" . "<br>");
//Print and Get the $content property from the $post1 at the same time.
$content = $post4->printContent4()->content;
echo $content;