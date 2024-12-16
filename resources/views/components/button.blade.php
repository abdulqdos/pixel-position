@props(['button' => false])

@if($button === 'button')
    <button {{ $attributes(['class' => 'text-white bg-blue-900 rounded-xl py-2 px-6 font-bold hover:bg-blue-800 transition duration-300 cursor-pointer']) }}>{{ $slot }}</button>
@else
    <a {{ $attributes(['class' => 'text-white bg-blue-600 rounded-xl py-2 px-6 font-bold hover:bg-blue-800 transition duration-300 cursor-pointer']) }}>{{ $slot }}</a>
@endif
