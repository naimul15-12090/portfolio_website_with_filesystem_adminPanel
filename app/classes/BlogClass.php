<?php

namespace App\classes;


class BlogClass
{

    public $fp, $b_title, $b_link, $b_des;

    public function __construct($postArray)
    {
        $this->b_link = $postArray['b_link'];
        $this->b_title = $postArray['b_title'];
        $this->b_des = $postArray['b_des'];
    }

    public function blogFile($rpathofBl)
    {
        $this->fp = fopen("$rpathofBl", 'a');
        fwrite($this->fp, "$this->b_link ,\n");
        fwrite($this->fp, "$this->b_title ,\n");
        fwrite($this->fp, "$this->b_des ,\n");



        header("location:route.php?page=blogs");
    }
}
