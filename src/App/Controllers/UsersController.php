<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class UsersController
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function login()
    {

        echo $this->view->render('userauth/login.php', [
            'title' => 'Login'
        ]);
    }
}