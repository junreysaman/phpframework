<?php

declare(strict_types=1);

function inspect(mixed $value): void{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function inspectAndDie(mixed $value): void{
    inspect($value);
    die();
}

function escape(mixed $value): string{
    return htmlspecialchars((string) $value);
}