<?php

namespace App\classes;


class AboutClass
{

    public $des1, $des2, $c1_title, $c1_number, $c2_title, $c2_number, $c3_title, $c3_number, $c4_title, $c4_number, $fp;

    public function __construct($postArray)
    {
        $this->des1 = $postArray['des1'];
        $this->des2 = $postArray['des2'];

        $this->c1_title = $postArray['c1_title'];
        $this->c1_number = $postArray['c1_number'];

        $this->c2_title = $postArray['c2_title'];
        $this->c2_number = $postArray['c2_number'];

        $this->c3_title = $postArray['c3_title'];
        $this->c3_number = $postArray['c3_number'];

        $this->c4_title = $postArray['c4_title'];
        $this->c4_number = $postArray['c4_number'];
    }

    public function aboutFile($rpathofA)
    {
        $this->fp = fopen("$rpathofA", 'w');
        fwrite($this->fp, "$this->des1 ,\n");
        fwrite($this->fp, "$this->des2 ,\n");
        fwrite($this->fp, "$this->c1_title ,\n");
        fwrite($this->fp, "$this->c1_number,\n");
        fwrite($this->fp, "$this->c2_title ,\n");
        fwrite($this->fp, "$this->c2_number,\n");
        fwrite($this->fp, "$this->c3_title ,\n");
        fwrite($this->fp, "$this->c3_number,\n");
        fwrite($this->fp, "$this->c4_title ,\n");
        fwrite($this->fp, "$this->c4_number,\n");


        header("location:route.php?page=about");
    }
}
