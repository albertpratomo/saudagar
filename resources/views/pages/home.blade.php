@php
use Lit\Config\Form\Pages\HomeConfig;

$p = HomeConfig::load();
@endphp

Title: {{$p->title}} <br><br>

Body: {!!$p->body!!} <br><br>

Sections: <br>
@foreach($p->sections as $section)
    {{ "$section->section_type: $section->title $section->body" }} <br>
@endforeach
