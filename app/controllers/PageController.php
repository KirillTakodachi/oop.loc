<?php

namespace App\controllers;

use League\Plates\Engine;

class PageController
{
    private $template;


    public function __construct()
    {
        $this->template = new Engine("../app/views");
    }


    public function registration() {
        echo $this->template->render("page_register");

    }


    public function login() {
        echo $this->template->render("page_login");
    }


    public function logout() {
        echo $this->template->render("page_logout");
    }

}