<?php

namespace games\controller;

class Controller
{
    public function view($view): string
    {
        return 'app/view/' . $view . '.php';
    }

    public function viewAdmin($view): string
    {
        return 'app/view/admin/' . $view . '.php';
    }
}
