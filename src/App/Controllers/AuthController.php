<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;


class AuthController
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function register()
    {
        echo $this->view->render('userauth/register.php', [
            'title' => 'Register'
        ]);
    }

    public function login()
    {
        echo $this->view->render('userauth/login.php', [
            'title' => 'Login'
        ]);
    }
}