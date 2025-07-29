<?php

declare(strict_types=1);


namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use Framework\TemplateEngine;

class TemplateDataMiddleware implements MiddlewareInterface
{
    public function __construct(private TemplateEngine $view){
        
    }
    public function process(callable $next): void
    {
        $this->view->addGlobal('project', 'PHP Framework');
        $this->view->addGlobal('desc', "A custom-built PHP framework designed to provide a structured and efficient foundation for web application development. Built following modern PHP practices and the MVC (Model-View-Controller) architectural pattern.");
        $this->view->addGlobal('version', '1.0.0');
        $this->view->addGlobal('year', date('Y'));
        $next();
    }
    
}