<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class UsersController
{
    private TemplateEngine $view;
    public function __construct()
    {
        $this->view = new TemplateEngine(Paths::VIEW);
    }

    public function login()
    {

        echo $this->view->render('userauth/login.php', [
            'title' => 'Login'
        ]);
    }
}