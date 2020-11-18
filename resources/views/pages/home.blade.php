@php
use Lit\Config\Form\Pages\HomeConfig;

$p = HomeConfig::load();

@endphp

{{$p->title}}

{!!$p->body!!}
