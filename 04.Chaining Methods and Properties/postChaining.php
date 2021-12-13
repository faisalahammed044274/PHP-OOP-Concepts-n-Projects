<?php

class Posts
{
    public $content;

    public function __construct($content)
    {
        echo "This is Constructor!" . PHP_EOL;
        $this->content = $content;
    }

    public function __destruct()
    {
        echo "This is Destructor!" . PHP_EOL;
    }

    public function printContent1()
    {

        echo $this->content . PHP_EOL;
        return $this;
    }
    public function printContent2()
    {

        echo $this->content . PHP_EOL;
        return $this;
    }
    public function printContent3()
    {

        echo $this->content . PHP_EOL;
        return $this;
    }
    public function printContent4()
    {
        echo $this->content . PHP_EOL;
        return $this;
    }

}

$post1 = new Posts("This is a post Content 1");
//Print and Get the $content property from the $post1 at the same time.
$content = $post1->printContent1()->content;
// $post2 = new Posts("This is a post Content 2");
// $content = $post2->printContent2()->content;
// $post3 = new Posts("This is a post Content 3");
// $content = $post3->printContent3()->content;
// $post4 = new Posts("This is a post Content 4");
// $content = $post4->printContent4()->content;
// echo $content;


