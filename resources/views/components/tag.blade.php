@props([ 'tag' , 'size' => 'base'])

@php
    $classes = "bg-white/10 px-2 py-1 text-white font-bold rounded-xl hover:bg-white/25 transition duration-300" ;
        if($size === 'base') {
        $classes .= 'px-5 py-1 text-sm';
        } else  {
        $classes .= 'px-3 py-1 text-xs';
        }
@endphp

<a href="/tags/{{ $tag->name }}" class= "{{ $classes }}" > {{ $tag->name  }} </a>
