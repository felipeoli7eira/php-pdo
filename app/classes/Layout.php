<?php

namespace app\classes;

class Layout
{
    private string $view;

    public function add(string $view): void
    {
        $this->view = $view;
    }

    public function load(): void
    {
        require __DIR__ . "/../views/{$this->view}.php";
    }

    public function master(string $master): string
    {
        return __DIR__ . "/../views/{$master}.php";
    }
}
