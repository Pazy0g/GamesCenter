<?php

namespace Games\Controller;

class Controller
{
    const VIEW_PATH = 'app/view/';
    const ADMIN_VIEW_PATH = 'app/view/admin/';
    const CONTROLLER_PATH = 'app/controller/';

    public function view($view)
    {
        return self::VIEW_PATH . $view . '.php';
    }

    public function viewAdmin($view)
    {
        return self::ADMIN_VIEW_PATH . $view . '.php';
    }

    public function control($view)
    {
        return self::CONTROLLER_PATH . $view . '.php';
    }
}
