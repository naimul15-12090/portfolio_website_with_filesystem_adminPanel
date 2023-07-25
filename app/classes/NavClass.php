<?php

namespace App\classes;


class NavClass
{
    public $fn, $ln, $fp;

    public function __construct($postArray)
    {
        $this->fn = $postArray['f_name'];
        $this->ln = $postArray['l_name'];
    }


    public function navFile($rpathof)
    {
        $this->fp = fopen("$rpathof", 'w');
        fwrite($this->fp, "$this->fn ,\n");
        fwrite($this->fp, "$this->ln,\n");

        header("location:route.php?page=home");
    }
}
