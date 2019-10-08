<?php

declare(strict_types=1);

namespace App\Controller;

class Controller
{
    public function view(string $view, $data = []): void
    {
        $twig = new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader(__DIR__ . '/../../resources/views')
        );

        $twig->display($view . '.html', $data);
    }
}
