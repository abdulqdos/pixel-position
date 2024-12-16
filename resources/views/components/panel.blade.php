@php
    $classes = "p-4 bg-white/5 rounded-xl  items-center border border-transparent hover:border-blue-800 cursor-pointer transition duration-500 group"
@endphp

<div {{ $attributes->merge([ 'class' => $classes]) }}>
  {{ $slot }}
</div>
