<?php

class IndexController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        //echo "<h1>Привет!</h1>";
    }

    public function infoAction()
    {
        phpinfo();
    }

}