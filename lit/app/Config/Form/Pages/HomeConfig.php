<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\CrudShow;
use Lit\Config\Form\FormConfig;
use Lit\Http\Controllers\Form\Pages\HomeController;

class HomeConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = HomeController::class;

    /**
     * Setup form page.
     *
     * @param \Ignite\Crud\CrudShow $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->card(function($form) {
            $form->input('title');

            $form->wysiwyg('body');
        });
    }
}
