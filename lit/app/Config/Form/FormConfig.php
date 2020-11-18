<?php

namespace Lit\Config\Form;

use Ignite\Crud\Config\FormConfig as BaseFormConfig;

abstract class FormConfig extends BaseFormConfig
{
    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return "{$this->collection()}/{$this->formName()}";
    }
}
