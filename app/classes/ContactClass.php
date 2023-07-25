<?php

namespace App\classes;


class ContactClass
{
    public $name, $email, $subject, $msg, $fp;

    public function __construct($postArray)
    {
        $this->name = $postArray['name'];
        $this->email = $postArray['email'];
        $this->subject = $postArray['subject'];
        $this->msg = $postArray['msg'];
    }


    public function contactFile($rpathof)
    {
        $this->fp = fopen("$rpathof", 'a');
        fwrite($this->fp, "$this->name ,\n");
        fwrite($this->fp, "$this->email ,\n");
        fwrite($this->fp, "$this->subject ,\n");
        fwrite($this->fp, "$this->msg ,\n");

        header("location:route.php?page=contact");
    }
}
