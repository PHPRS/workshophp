<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Controller\HomeController;

final class HomeControllerTest extends TestCase
{
    /**
     * @var
     */
    private $controller;

    public function setUp(): void
    {
        $this->controller = new HomeController();
    }

    public function testIfClassIsHomeControllerInstance(): void
    {
        $this->assertInstanceOf('App\Controller\HomeController', $this->controller);
    }

    public function testIfClassIsControllerInstance(): void
    {
        $this->assertInstanceOf('App\Controller\Controller', $this->controller);
    }
}
