@php
use Lit\Config\Form\Pages\HomeConfig;

$p = HomeConfig::load();
@endphp

{{$p->title}}

{!!$p->body!!}

@foreach($p->sections as $section)
    {{ "$section->name ($section->section_type): $section->title" }} <br>
@endforeach
