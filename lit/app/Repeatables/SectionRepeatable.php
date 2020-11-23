<?php

namespace Lit\Repeatables;

use Ignite\Crud\Fields\Block\Repeatable;
use Ignite\Crud\Fields\Block\RepeatableForm;
use Ignite\Page\Table\ColumnBuilder;

class SectionRepeatable extends Repeatable
{
    /**
     * Repeatable type.
     *
     * @var string
     */
    protected $type = 'section';

    /**
     * The represantive view of the repeatable.
     *
     * @var string
     */
    protected $view = 'rep.section';

    /**
     * Build the repeatable preview.
     *
     * @param  ColumnBuilder $preview
     * @return void
     */
    public function preview(ColumnBuilder $preview): void
    {
        $preview->col('Type')->value('section_type', [
            1 => 'Hero',
            2 => 'Paragraph',
        ]);
    }

    /**
     * Build the repeatable form.
     *
     * @param  RepeatableForm $form
     * @return void
     */
    public function form(RepeatableForm $form): void
    {
        $form->select('section_type')
            ->options([
                1 => 'Hero',
                2 => 'Paragraph',
            ]);

        $form->input('title')
            ->when('section_type', 1);

        $form->wysiwyg('body')
            ->when('section_type', 2);
    }
}
