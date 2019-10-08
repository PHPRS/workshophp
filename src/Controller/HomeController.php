<?php

declare(strict_types=1);

namespace App\Controller;

final class HomeController extends Controller
{
    public function index(): void
    {
        $data = [
            'title' => 'Home Page',
            'message' => 'Hello HomeController!',
        ];

        $this->view('public/home', $data);
    }
}
