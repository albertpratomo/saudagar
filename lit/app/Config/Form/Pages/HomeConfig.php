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

            $form->block('sections')->repeatables(function($repeatables) {
                $repeatables->add('section', function($form, $preview) {
                    $preview->col('{name}');
        
                    $form->input('name');
                    $form->select('section_type')
                        ->options([
                            1 => 'A',
                            2 => 'B',
                        ]);
                    $form->input('title');
                });
            });
        });
    }
}
