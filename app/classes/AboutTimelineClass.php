<?php

namespace App\classes;


class AboutTimelineClass
{

    public $s_time, $e_time, $e_name, $o_name, $des, $fp;

    public function __construct($postArray)
    {
        $this->s_time = $postArray['s_time'];
        $this->e_time = $postArray['e_time'];
        $this->e_name = $postArray['e_name'];
        $this->o_name = $postArray['o_name'];
        $this->des = $postArray['des'];
    }

    public function aboutTimelineFile($rpathofAT)
    {
        $this->fp = fopen("$rpathofAT", 'a');
        fwrite($this->fp, "$this->s_time,\n");
        fwrite($this->fp, "$this->e_time,\n");
        fwrite($this->fp, "$this->e_name  ,\n");
        fwrite($this->fp, "$this->o_name ,\n");
        fwrite($this->fp, "$this->des ,\n");



        header("location:route.php?page=about");
    }
}
