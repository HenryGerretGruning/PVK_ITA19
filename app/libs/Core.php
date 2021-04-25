<?php


class Core
{ // Class start
    // constructor
    public function __construct()
    {
        $this->getUrl();

    }

    // get url date
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            echo $url;
        }
    }

} // Class End