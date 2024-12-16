@props(['type' => false , 'active' => false])
@if($type == 'button')
    <button {{ $attributes }} class = 'transition duration-300 hover:text-blue-600 {{ $active ? 'text-blue-600' : ' ' }}'> {{ $slot }}</button>
@else
    <a {{ $attributes }} class = 'transition duration-300 hover:text-blue-600 {{ $active ? 'text-blue-600' : ' ' }}'> {{ $slot }}</a>
@endif
