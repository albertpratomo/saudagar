<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Lit\Config\Form\Pages\HomeConfig;

class HomeController
{
    /**
     * View the home page.
     *
     * @return \Inertia\Response
     */
    public function __invoke(): Response
    {
        $page = HomeConfig::load();

        return inertia('Home', compact('page'));
    }
}
