<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};


class AuthController
{
    public function __construct(
        private TemplateEngine $view, 
        private ValidatorService $validatorService, 
        private UserService $userService)
    {
    }

    public function registerView()
    {
        echo $this->view->render('userauth/register.php', [
            'title' => 'Register'
        ]);
    }

    public function register()
    {  
       $this->validatorService->validateRegister($_POST);
    }

    public function loginView()
    {
        echo $this->view->render('userauth/login.php', [
            'title' => 'Login'
        ]);
    }
}