<?php

namespace App\classes;


class ServiceClass
{

    public $s_name, $s_des, $fp, $imgName, $tempImg, $myImg;

    public function __construct($postArray, $postFiles)
    {
        $this->s_name = $postArray['s_name'];
        $this->s_des = $postArray['s_des'];




        $this->imgName = $postFiles['service-img']['name'];
        $this->tempImg = $postFiles['service-img']['tmp_name'];
        $this->myImg = "assets/img/$this->imgName";
        move_uploaded_file($this->tempImg, $this->myImg);
    }

    public function serviceFile($rpathofS)
    {
        $this->fp = fopen("$rpathofS", 'a');
        fwrite($this->fp, "{$this->myImg} ,\n");
        fwrite($this->fp, "$this->s_name ,\n");
        fwrite($this->fp, "$this->s_des ,\n");



        header("location:route.php?page=services");
    }
}
